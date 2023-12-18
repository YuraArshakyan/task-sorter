Laravel
Task:
Create task (info to save: task name, priority, timestamps)
Edit task
Delete task
Reorder tasks with drag and drop in the browser. Priority should automatically be updated based on this. #1 priority goes at top, #2 next down and so on.
Tasks should be saved to a mysql table.
add project functionality to the tasks. User should be able to select a project from a dropdown and only view tasks associated with that project.

How to set up:
1.Run git clone https://github.com/YuraArshakyan/task-sorter.git
2.Run composer install
3.Run cp .env.example .env
4.Run php artisan key:generate
5.Run php artisan migrate
6.Run php artisan serve
7.Go to link localhost:8000

Enjoy the project
