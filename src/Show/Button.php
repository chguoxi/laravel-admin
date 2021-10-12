<?php

namespace Encore\Admin\Show;

use Encore\Admin\Show;
use Encore\Admin\Show\Actions\_List;
use Encore\Admin\Show\Actions\Action;
use Encore\Admin\Show\Actions\Delete;
use Encore\Admin\Show\Actions\Edit;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;

class Button implements Renderable
{
    /**
     * The panel that holds this tool.
     *
     * @var Show
     */
    protected $show;

    /**
     * @var string
     */
    protected $resource;

    /**
     * @var Collection
     */
    protected $default;

    /**
     * Tools should be appends to default tools.
     *
     * @var Collection
     */
    protected $appends;

    /**
     * Tools should be prepends to default tools.
     *
     * @var Collection
     */
    protected $prepends;

    protected $data = [];
    protected $view = 'admin::show.button';

    /**
     * Tools constructor.
     *
     * @param Show $show
     */
    public function __construct(Show $show, Array $data)
    {
        $this->show = $show;
        $this->default = new Collection();
        $this->data = [
            'type' => $data['type'] ?? 'button',
            'text' => $data['text'] ?? '确定',
            'action' => $data['action'] ?? '',
            'class' => $data['class'] ?? ''
        ];
    }


    /**
     * Render tools.
     *
     * @return string
     */
    public function render()
    {
        return view($this->view, $this->data)->render();
    }
}
