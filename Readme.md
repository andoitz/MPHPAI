
MAGIC PHP AUTO-INSTANTIATOR
	Include and instantiate PHP Classes automatically only writing something like "folder.folder.class;" on your PHP script.

	When we play with PHP MVC programming we ever have to make a class instantiation,
	then we need an include and have to know the exactly path for the folders, create the class
	and after we need to remember the name of instantiated variables that we did before.
	
	With this class you will need to use only one line to do this. Ever we will have the same name 
	for the instantiated variable,	so.. its really easy for remember.
	
	Enviroment:
		- This class was tested with the next specified environment:
			Windows XP
			WAMP SERVER 2.4
			PHP 5.4.16
			Apache 2.4.4
	
	Example:
		Before:
			include('com/phpclasses/myClass.php');
			include('com/phpclasses/myClass2.php');
			include('com/phpclasses/myClass3.php');
			
			$myClass = new myClass();
			$myClass2 = new myClass2();
			$myClass3 = new myClass3();
			
			$myClass->example();
			$myClass2->example();
			$myClass3->example();
			
			* This code will create three classes and will call an example method for everyone.
		
		After:
			com.phpclasses.myClass;
			com.phpclasses.myClass2;
			com.phpclasses.myClass3;
			
			$myClass->example();
			$myClass2->example();
			$myClass3->example();
			
			* This code will make it more easy.

This class is only a testing class based in other programming languages like Java or ActionScript:
	import java.util.*

I dont really know the real performance using this class on a production enviroment.
As i said this class is only a testing class, the real way can be to make an apache extension, more complete and tested.

For more information and updates please visit: http://www.andoitz.com
