<?php
namespace App\Http\Controllers;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $query = Teacher::query();
        if ($request->filled('department')) {
            $query->where('department', $request->input('department'));
        }
        $teachers = $query->orderBy('full_name')
            ->paginate(5)
            ->withQueryString();
        $departments = Teacher::select('department')
            ->distinct()
            ->orderBy('department')
            ->pluck('department');
        return view('teachers.index', compact('teachers', 'departments'));
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(TeacherRequest $request)
    {
        Teacher::create($request->validated());
        return redirect()->route('teachers.index');
    }
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        $teacher->update($request->validated());
        return redirect()->route('teachers.index');
    }
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
