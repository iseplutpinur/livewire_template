<?php

/**
 * @Author: Bayu Rifki Alghifari
 * @Date:   2021-12-29 22:30:36
 * @Last Modified by:   Bayu Rifki Alghifari
 * @Last Modified time: 2022-02-09 16:17:57
 */


namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Menu as Menus;

class Menu extends Component
{
    use WithPagination;

    protected $queryString = ['paginate'];
    protected $listeners = ['destroy' => 'destroy'];
    private $searchable = ['title', 'icon', 'url'];
    public $header = 'Menu',
        $search = '',
        $paginate = 10,
        $statusUpdate = false,
        $ids, $parent, $title, $icon, $url, $index;

    public function render()
    {
        $data = Menus::latest()->paginate($this->paginate);
        $parents = Menus::where('parent_id', '=', 0)->get();

        // Search
        if ($this->search !== null) {
            $data = Menus::latest()->whereHas('parent', function (Builder $query) {
                $query->where('title', 'like', "%{$this->search}%");
            });

            foreach ($this->searchable as $field) {
                $data = $data->orWhere($field, 'like', "%{$this->search}%");
            }

            $data = $data->paginate($this->paginate);
        }

        return view('livewire.admin.setting.menu', compact('data', 'parents'));
    }

    public function getDetail($id)
    {
        $exe = Menus::find($id);

        $this->ids = $exe->id;
        $this->parent = $exe->parent_id;
        $this->title = $exe->title;
        $this->icon = $exe->icon;
        $this->index = $exe->index;
        $this->url = $exe->url;
        $this->changeStatusUpdate(true);
    }

    public function save()
    {
        if ($this->statusUpdate) {
            // Update
            $exe = Menus::find($this->ids)->update([
                'parent_id' => $this->parent,
                'title' => $this->title,
                'icon' => $this->icon,
                'index' => $this->index,
                'url' => $this->url,
            ]);
        } else {
            // Create
            $exe = Menus::create([
                'parent_id' => $this->parent,
                'title' => $this->title,
                'icon' => $this->icon,
                'index' => $this->index,
                'url' => $this->url,
            ]);
        }

        $this->emit('closeModal', 'myModal');
        $this->emit('alert', $this->statusUpdate ? 'Update data success' : 'Create data success');
        $this->clear();
    }

    public function destroy($id)
    {
        $exe = Menus::find($id)->delete();

        $this->emit('alert', 'Delete data success');
    }

    public function confirmDelete($id)
    {
        $this->emit('confirm', $id);
    }

    public function changeStatusUpdate($status)
    {
        $this->statusUpdate = $status;
    }

    public function clear()
    {
        $this->statusUpdate = false;
        $this->ids = null;
        $this->parent = null;
        $this->title = null;
        $this->icon = null;
        $this->index = null;
        $this->url = null;
    }
}
