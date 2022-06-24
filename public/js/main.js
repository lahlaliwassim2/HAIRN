document.querySelector('.sidebar-toggler').addEventListener('click', function() {
  let sidebar = document.querySelector('.sidebar');
  let content = document.querySelector('.content');
  sidebar.classList.toggle('open');
  content.classList.toggle('open');
});