@extends('layout', ['title' => 'Add Condition'])

@section('content')
<form method="POST" action="{{ route('questions.conditions.store', $question) }}" class="space-y-4">
  @csrf

  <div>
    <label class="block">Parent Question</label>
    <select name="parent_question_id" class="w-full border p-2" required>
      @foreach($parentQuestions as $pq)
        <option value="{{ $pq->id }}">[Q{{ $pq->id }}] {{ $pq->text }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <label class="block">Answer Value</label>
    <input type="text" name="parent_answer_value" class="w-full border p-2" required>
  </div>

  <div>
    <label class="block">Operator</label>
    <select name="operator" class="w-full border p-2">
      <option value="=">=</option>
      <option value="!=">!=</option>
    </select>
  </div>

  <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
  <a href="{{ route('questions.edit', $question) }}" class="ml-2 text-gray-600">Cancel</a>
</form>
@endsection
