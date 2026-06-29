	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<div>
				<img src="<?php echo e(asset('assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
			</div>
			<div>
				<h4 class="logo-text">EduManage</h4>
			</div>
			<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
			</div>
		</div>
		<ul class="metismenu" id="menu">
			<li>
				<a href="<?php echo e(route('faculty.dashboard')); ?>">
					<div class="parent-icon"><i class='bx bx-home-alt'></i></div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>
			<li class="menu-label">Academic</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-book-open'></i></div>
					<div class="menu-title">Courses</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Courses</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Add Course</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-group'></i></div>
					<div class="menu-title">Students</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Students</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Student Records</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-user-check'></i></div>
					<div class="menu-title">Teachers</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Teachers</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-edit-alt'></i></div>
					<div class="menu-title">Examinations</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Exam Schedule</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Results</a></li>
				</ul>
			</li>
			<li class="menu-label">Profile</li>
			<li>
				<a href="#">
					<div class="parent-icon"><i class="bx bx-user-circle"></i></div>
					<div class="menu-title">My Profile</div>
				</a>
			</li>
			<li>
				<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-faculty').submit();">
					<div class="parent-icon"><i class='bx bx-log-out'></i></div>
					<div class="menu-title">Logout</div>
				</a>
				<form id="logout-form-faculty" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none"><?php echo csrf_field(); ?></form>
			</li>
		</ul>
	</div>
<?php /**PATH C:\xampp\htdocs\StudySync\resources\views/faculty/parts/leftbar.blade.php ENDPATH**/ ?>