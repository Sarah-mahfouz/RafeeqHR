
document.querySelectorAll('.edit-btn').forEach(btn => {
  btn.addEventListener('click', function() {
 
    const id = this.getAttribute('data-id');
    const name = this.getAttribute('data-name');
    const description = this.getAttribute('data-description');
    
    
    document.getElementById('modalDeptName').value = name;
    document.getElementById('modalDeptDesc').value = description;
    
   
    document.getElementById('editDepartmentForm').action = `/admin/departments/${id}`;
  });
});
