<?php

namespace App\Admin\Controllers;

use App\AbuseReport;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class CaseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cases Reported';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AbuseReport());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        // $grid->column('email', __('Email'));
        // $grid->column('phone_number', __('Phone number'));
        // $grid->column('location', __('Location'));
        $grid->column('description', __('Description'));
        // $grid->column('media_url', __('Media url'));
        $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $case = AbuseReport::findOrFail($id);
        $show = new Show(AbuseReport::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone_number', __('Phone number'));
        $show->field('location', __('Location'));
        $show->field('description', __('Description'));
        // $show->field('media_url', __('Media url'));
        $show->media('Media')->as(function ($media) use ($id, $case) {
            $html = Storage::disk('public')->url($case->media_url);
            return $html;
        })->file('Media');
        // $show->avatar()->file();
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AbuseReport());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('phone_number', __('Phone number'));
        $form->text('location', __('Location'));
        $form->textarea('description', __('Description'));
        $form->text('media_url', __('Media url'));

        return $form;
    }
}
