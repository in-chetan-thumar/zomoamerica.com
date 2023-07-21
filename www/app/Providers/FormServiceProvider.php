<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('bsText', 'components.input', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [] , 'required' => false,'formatted'=>null]);
        \Form::component('bsEmail', 'components.email', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [], 'required' => false,'formatted'=>null]);
        \Form::component('bsTextArea', 'components.textarea', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [], 'required' => false,'formatted'=>null]);
        \Form::component('bsCheckBox', 'components.checkbox', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [], 'required' => false,'formatted'=>null]);
        \Form::component('bsDate', 'components.date', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [], 'required' => false,'formatted'=>null]);
        \Form::component('bsRadio', 'components.radio',['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [], 'required' => false,'formatted'=>null]);
        \Form::component('bsSelect', 'components.select',['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [], 'required' => false,'formatted'=>null]);
        \Form::component('bsFile', 'components.file', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [] , 'required' => false,'formatted'=>null]);
        \Form::component('bsHtml', 'components.html', ['label','name', 'value' => null,'class'=>null, 'attributes' => ['class' =>''],'options' => [] , 'required' => false,'formatted'=>null]);

    }
}
