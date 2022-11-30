<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Todo List</title>
</head>

<body id="site_body">

    <div id="app">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="mega_container w-50">
                <h1 class="text-center">Todo List</h1>
                <div class="my_card w-100 m-auto rounded mb-3">
                    <div class="d-flex p-3 list justify-content-between" v-for="(task, index) in tasks">
                        <p class="">{{task}}</p>
                        <div class="delete rounded bg-danger text-light d-flex justify-content-center align-items-center" @click="removeTask(index)"><i class="fa-solid fa-trash"></i></div>
                    </div>
                </div>
                    <div class="input-group">
                        <input type="text" name="task"  class="form-control p-2" placeholder="Inserire tasks" v-model="task" @keyup.enter="addTask">
                        <button type="submit" class="btn btn-outline-secondary p-2" @click="addTask">inserisci</button>
                    </div>
                
            </div>
        </div>


    </div>


    <!-- SCRIPT -->
    <!-- CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>