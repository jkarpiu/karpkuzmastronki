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
    protected $title = 'Sekcje';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sections());

        $grid->column('id', __('ID'))->editable() -> sortable();
        $grid->column('name', __('Nazwa'))->editable() -> sortable();
        $grid->column('pageId', __('ID sekcji (w sensie HTML)'))->editable() -> sortable();
        $grid->column('content', __('Zawartość'))->editable()  -> sortable();
        $grid->column('style', __('Style(CSS)'))->editable()  -> sortable();
        $grid->column('created_at', __('Utworzono')) -> sortable();
        $grid->column('updated_at', __('Zauktalizowano')) -> sortable() ;

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

        $form->text('name', __('Nazwa'));
        $form->text('pageId', __('ID sekcji (w sensie HTML)'));
        $form->textarea('content', __('Zawartość'));
        $form->textarea('style', __('Style(CSS'));

        return $form;
    }
}
