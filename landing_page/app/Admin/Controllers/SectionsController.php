<?php

namespace App\Admin\Controllers;

use App\Sections;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SectionsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Sections';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sections());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('pageId', __('PageId'));
        $grid->column('content', __('Content'));
        $grid->column('style', __('Style'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Sections::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('pageId', __('PageId'));
        $show->field('content', __('Content'));
        $show->field('style', __('Style'));
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
        $form = new Form(new Sections());

        $form->text('name', __('Name'));
        $form->text('pageId', __('PageId'));
        $form->textarea('content', __('Content'));
        $form->textarea('style', __('Style'));

        return $form;
    }
}
