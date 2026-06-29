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
				<a href="<?php echo e(route('student.dashboard')); ?>">
					<div class="parent-icon"><i class='bx bx-home-alt'></i></div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>
			<li class="menu-label">My Academics</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-book-open'></i></div>
					<div class="menu-title">My Courses</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Enrolled Courses</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Course Materials</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Assignments</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-check-circle'></i></div>
					<div class="menu-title">Attendance</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>My Attendance</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Attendance Report</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-edit-alt'></i></div>
					<div class="menu-title">Examinations</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Exam Schedule</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>My Results</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Grade Report</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-calendar'></i></div>
					<div class="menu-title">Schedule</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Class Timetable</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Academic Calendar</a></li>
				</ul>
			</li>
			<li class="menu-label">Finance</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-money'></i></div>
					<div class="menu-title">Fee & Payments</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Fee Details</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Payment History</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Pay Fee</a></li>
				</ul>
			</li>
			<li class="menu-label">Communication</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-notification'></i></div>
					<div class="menu-title">Notices</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Notice Board</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Announcements</a></li>
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
			<li class="menu-label">Profile</li>
			<li>
				<a href="<?php echo e(route('student.profile')); ?>">
					<div class="parent-icon"><i class="bx bx-user-circle"></i></div>
					<div class="menu-title">My Profile</div>
				</a>
			</li>
			<li>
				<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-student').submit();">
					<div class="parent-icon"><i class='bx bx-log-out'></i></div>
					<div class="menu-title">Logout</div>
				</a>
				<form id="logout-form-student" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none"><?php echo csrf_field(); ?></form>
			</li>
		</ul>
		<!--end navigation-->
	</div>
<?php /**PATH C:\xampp\htdocs\StudySync\resources\views/student/parts/leftbar.blade.php ENDPATH**/ ?>