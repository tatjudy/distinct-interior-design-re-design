// Projects Page
const projects = document.querySelectorAll('.projects-wrapper .feature-link');

// Add class to every 2/3 instance
const projectsArr = Array.from(projects);
for (let i = 0; i < projectsArr.length; i++) {
    if ((i + 2) % 3 < 2) {
        projectsArr[i].classList.add('half');
    }
}