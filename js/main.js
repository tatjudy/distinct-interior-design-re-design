const projects = document.querySelectorAll('.feature-link');

const projectsArr = Array.from(projects);

for (let i = 0; i< projectsArr.length; i++) {
    if ((i + 2) % 3 < 2) {
        projectsArr[i].classList.add('half');
    }
}
console.log('hihi');