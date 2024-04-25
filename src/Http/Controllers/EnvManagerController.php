<?php

namespace Reliva\EnvManager\Http\Controllers;


use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Controllers\HasResourceActions;
use OpenAdmin\Admin\Show;
use Reliva\EnvManager\Env;


class EnvManagerController extends Controller
{
    use HasResourceActions;

    private $model;

    public function __construct()
    {
        $this->model = new Env();
    }

    public function index(Content $content)
    {
        return $content
            ->header('Env File')
            ->description('Manage environment file')
            ->body($this->grid());
    }


    /**
     * Show interface.
     *
     * @param mixed $key
     * @param Content $content
     * @return Content
     */
    public function show($key, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($key));
    }


    /**
     * Edit interface.
     *
     * @param $key
     * @return Content
     */
    public function edit($key, Content $content)
    {
        $content->header('Env File');
        $content->description('Edit variable');
        $content->body($this->form()->edit($key));
        return $content;
    }


    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('Create new env variable')
            ->body($this->form());
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid($this->model);
        $grid->key();
        $grid->value();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $key
     * @return Show
     */
    protected function detail($key)
    {
        $show = new Show($this->model->findOrFail($key));

        $show->key('Key');
        $show->value('Value');

        return $show;
    }

    protected function form()
    {
        $form = new Form($this->model);
        $form->text('key', 'Key');
        $form->text('value', 'Value');
        return $form;
    }


    /**
     * Destroy data
     *
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        if ($this->model->deleteEnv($id)) {
            $data = [
                'status' => true,
                'message' => trans('admin.delete_succeeded'),
            ];
        } else {

            $data = [
                'status' => false,
                'message' => trans('admin.delete_failed'),
            ];
        }

        return response()->json($data);
    }

}
