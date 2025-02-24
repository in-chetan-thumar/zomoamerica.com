<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Exports\ContactData;
use Excel;
use Cache;

class ContactController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new ContactDetail();
    }

    public function index(Request $request)
    {
        $table = resolve('contact-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.contact.contactList', compact('table'));
    }


    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('backend.product.contact') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['role'] = $request->role;
            $params['page'] = $request->page ?? 0;
            $params['type'] = $request->type ?? null;
            $params['start_date'] = $request->start_date ?? null;
            $params['end_date'] = $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();

        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] = url()->previous();
        }
        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        }

        return $params;
    }
    public function update(Request $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {

            // Update user
            $params = [];
            $params['email'] = $request->email;
            $params['subject'] = $request->subject;
            $params['message'] = $request->message;
            $user = resolve('contact-repo')->update($params, $id);

            if (!empty($user)) {

                $data['error'] = false;
                $data['message'] = 'User update successfully.';
                $data['view'] = resolve('user-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }
    public function edit(Request $request)
    {
     
        $data = [];
        try {
            $id = $request->id;
            $user = resolve('contact-repo')->findByID($id);
            $data['error'] = false;
            $data['view'] = view('admin.contact.offcanvas', compact('user'))->render();
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }
    public function destroy($id)
    {
        try {
            $contact = resolve('contact-repo')->findById($id);
            if (!empty($contact)) {

                $contact->delete();
                toastr()->success( ' Contact deleted successfully..!');
                return redirect()->route('backend.product.contact');
            } else {
                toastr()->error('Contact not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
    public function export(Request $request)
    {
        // $fileName = 'contact.xlsx';
        // return Excel::download(new ContactData, $fileName);
        $contact_data = new ContactData($request);

        return Excel::download($contact_data, Carbon::now()->format('Ymd_his') . 'contact' . '.xlsx');
    }

}
