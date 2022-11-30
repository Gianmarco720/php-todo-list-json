<!doctype html>
<html lang="en">

<head>
    <title>Todo List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div id="app">
        <header class="text-center">
            <h1 class="fw-light">Todo List</h1>
        </header>
        <main>
            <div class="container d-flex flex-column align-items-center">
                <div class="col-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="task in tasks">{{task}}</li>
                    </ul>
                    <form action="script.php" method="post">
                        <div class="mb-3 d-flex mt-2">
                            <input type="text" name="task" id="task" class="form-control rounded-0" placeholder="Add a new task" aria-describedby="taskHelper" v-model="newTask" @keyup.enter="addTasks" @click="addTasks">
                            <button type="submit" class="btn btn-primary rounded-0">Add Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Vue CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- My Script -->
    <script src="./app.js"></script>
</body>

</html>