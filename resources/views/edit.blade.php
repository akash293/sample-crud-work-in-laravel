


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">



<div class="container">
    <h1>Edit Work</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('update', ['id' => $data->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" name="role" value="{{ $data->role }}">
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" value="{{ $data->salary }}">
        </div>

        <div class="form-group">
            <label for="experience">Experience</label>
            <input type="text" class="form-control" id="experience" name="experience" value="{{ $data->experience }}">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>

        <button type="back" class="btn btn-danger">back</button>
    </form>
</div>

<style>
    /* Your existing styles for the container */
    .input_txtarea {
        /* Add any existing styles here */
    }

    /* Style for the checkbox to appear as a tick button */
    .exit-checkbox {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: 1px solid #555;
        width: 20px;
        height: 20px;
        border-radius: 3px;
        cursor: pointer;
        margin-right: 5px; /* Adjust as needed */
    }

    .exit-checkbox:checked {
        background-color: #4CAF50; /* Adjust as needed */
        border: 1px solid #4CAF50; /* Adjust as needed */
        color: white; /* Adjust as needed */
    }
</style>

<div class="input_txtarea d-flex gap-1 position-relative">
    <x-splade-checkbox class="exit-checkbox" name="acknowledgement" :show-errors="true"/>
    <a href="" style="position: absolute; left:60px;"></a>
        <u>Resignation policy</u>

</div>
