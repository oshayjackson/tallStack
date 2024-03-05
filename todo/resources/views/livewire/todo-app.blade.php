namespace App\Http\Livewire;

use Livewire\todo-list;
use App\Models\TodoList;

class TodoList extends Component
{
    public $todos;
    public $newTodo;

    public function mount()
    {
        $this->todos = TodoList::all();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        Todo::create(['title' => $this->newTodo]);
        $this->newTodo = '';
        $this->todos = TodoList::all();
    }

    public function deleteTodo($id)
    {
        TodoList::destroy($id);
        $this->todos = TodoList::all();
    }
}
