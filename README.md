# Octalogic Tech Web-Test
## Table of Contents

| Task | Description |
| ----------- | ----------- |
| [ Task 1 ](#task-1) | Git |
| [ Task 2 ](#task-2) | Form and Validation |
| [ Task 3 ](#task-3) | Request |
| [ Task 4 ](#task-4) | Arrays |
| [ Bonus Task ](#bonus-task) | Libraries |

### Task 1
- Clone this repository into your local server folder
  - This would be WAMP(www) or XAMPP(htdocs)
- Switch branch to development branch and do all changes from there.
- Once on the development branch, create a new branch from the development branch and name it after your first name.
  - If your name is "Glenn Fernandes" branch name should be "glenn"


### Task 2
- Create a form with a single input and a submit button
  - User can only enter a number ( 0,1,2,3,4,5,6,7,8,9)
  - User can enter between 0 and 9
  - No alphabets must be allowed to be entered 

### Task 3
- Form will be submitted using AJAX
  - Request will use POST
  - Jquery is optional (*Use whatever you are comfortable with*)


### Task 4
- Validate that the number inputted is
  - one of the following ( 1,3,5 )
  - if true
    - Search for the relevant row in the array below based on the “**id**” field
    - return value and display "**name**" somewhere on the DOM. 
  - if false
    - Send back an error message saying “ **Index not available**” and display it somewhere on the DOM as well as in the Developer Console


```
[
	[ id => 1, name => “A”, age => 8],
	[ id => 2, name => “B”, age => 7],
	[ id => 3, name => “C”, age => 7],
	[ id => 4, name => “D”, age => 8],
	[ id => 6, name => “F”, age => 6],
	[ id => 7, name => “G”, age => 6],
	[ id => 8, name => “H”, age => 2],
	[ id => 9, name => “I”, age => 1]
]
```
### Bonus Task
- *Work on this task only after finishing previous tasks*
  - Using the number inputted
    - Find the month of a year relevent to that number ( 1-January,9-September )
    - Find the Day of the 1st and last day of that month.
      - Eg:- 1st February is "Monday" and 28th Feb is "Saturday"
    - Use only moment.js functions to get the following.

