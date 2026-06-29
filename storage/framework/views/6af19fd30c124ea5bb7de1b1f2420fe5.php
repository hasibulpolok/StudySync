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
		<!--navigation-->
		<ul class="metismenu" id="menu">
			<li>
				<a href="<?php echo e(route('admin.dashboard')); ?>">
					<div class="parent-icon"><i class='bx bx-home-alt'></i></div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>
			<li class="menu-label">Academic Management</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-buildings'></i></div>
					<div class="menu-title">Departments</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Departments</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Add Department</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-book-open'></i></div>
					<div class="menu-title">Courses</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Courses</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Add Course</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Course Schedule</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-calendar'></i></div>
					<div class="menu-title">Academic Calendar</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Semester Schedule</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Exam Timetable</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Holidays</a></li>
				</ul>
			</li>
			<li class="menu-label">User Management</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-user-check'></i></div>
					<div class="menu-title">Teachers</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Teachers</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Add Teacher</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Assign Courses</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-group'></i></div>
					<div class="menu-title">Students</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Students</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Enroll Student</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Student Records</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-id-card'></i></div>
					<div class="menu-title">Faculty</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Faculty</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Add Faculty</a></li>
				</ul>
			</li>
			<li class="menu-label">Examinations</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-edit-alt'></i></div>
					<div class="menu-title">Exam Management</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Create Exam</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Exam Schedule</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Results</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Grade Reports</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-check-circle'></i></div>
					<div class="menu-title">Attendance</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Mark Attendance</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Attendance Reports</a></li>
				</ul>
			</li>
			<li class="menu-label">Finance</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-money'></i></div>
					<div class="menu-title">Fee Management</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Fee Structure</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Fee Collection</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Payment Reports</a></li>
				</ul>
			</li>
			<li class="menu-label">Communication</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-notification'></i></div>
					<div class="menu-title">Notices</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>All Notices</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Post Notice</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-envelope'></i></div>
					<div class="menu-title">Messages</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Inbox</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Send Message</a></li>
				</ul>
			</li>
			<li class="menu-label">System</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-cog'></i></div>
					<div class="menu-title">Settings</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Institution Info</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Academic Year</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>System Config</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();">
					<div class="parent-icon"><i class='bx bx-log-out'></i></div>
					<div class="menu-title">Logout</div>
				</a>
				<form id="logout-form-admin" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none"><?php echo csrf_field(); ?></form>
			</li>
		</ul>
		<!--end navigation-->
	</div>
<?php /**PATH C:\xampp\htdocs\StudySync\resources\views/admin/parts/leftbar.blade.php ENDPATH**/ ?>