@extends('layouts.layout')
@section('content')
<div class="content container mt-4">
            <h1 class="mb-4 text-center">Students List</h1>

            <!-- Filters Row -->
            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <input type="text" id="loginSearch" class="form-control" placeholder="Enter Student name">
                </div>
                
            

            

            <!-- Users List -->
            <div>
                <h3 class="text-center mb-4">Users List</h3>
                <div id="usersList" class="row g-3">
                    <!-- User cards will be displayed here -->
                </div>
            </div>
        </div>

        <!-- Sticky Footer -->
        <footer class="footer text-center">
            <p>Copyright &copy; Dr. Roaa Soloh 2024</p>
        </footer>
    </div>
    <script>
    $(document).ready(function () {
        let allUsers = [];

        // Fetch and initialize data
        $.get('data.php', function (response) {
            allStudents = response;
            initializePage(allStudents);
        });

    
       
        // Display user cards
        function displayUsers(users) {
            const studentList = $('#studentsList');
            studentList.empty();
            students.forEach(user => {
                studentList.append(`
                @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('recipes.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                `);
            });
        }
    }


endsection

