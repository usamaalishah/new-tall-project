<div>
    <h1>Student Componentes (Parents)</h1>

    @foreach($students as $student)
        {{-- <h4>{{ $student }}</h4> --}}
        <livewire:student-list :name="$student"/>
        @endforeach
</div>
