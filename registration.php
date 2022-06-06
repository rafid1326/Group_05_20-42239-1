RedW1ne
#1595

Nogi Chan — 08/16/2021
kalke shokale call dis then porabi :v
Adian — 08/16/2021
ami nijei toh pari na
Nogi Chan — 08/16/2021
fibo mcm lcs egula to paros
Adian — 08/16/2021
@Nogi Chan
Adian — 08/16/2021
@Nogi Chan  kire koi tui
Nogi Chan — 08/17/2021
https://media.tenor.co/videos/a091a6a6f3f58832e21670079d0bddbc/mp4
Adian — 08/17/2021
Image
Nogi Chan — 08/17/2021
Image
Image
Image
Image
Image
Image
Image
Image
Image
Adian — 08/17/2021
Image
Adian — 08/18/2021
dara 5 min
Nogi Chan — 01/31/2022
#include<iostream>
#include<fstream>
using namespace std;


int main(){
    int i = 0;
    float Arr[8];
    float extractor;
    float h,l;
    float sum=0,avg;

    ifstream ReadFile; // ifstream is used to read file, works like cin & ReadFile is an o

    ReadFile.open("floatnumbers.txt"); //if the text file and the .cpp file are not present in the same folder, use path -> ReadFile.open("E:\Student\Array.txt");

    if (!ReadFile) {
        cout << "File not found";
    }



    while (ReadFile >> extractor && i<8)
    { //Reading elements from stream just like cin.

        Arr[i]=extractor;
        i++;

    }

    ReadFile.close();

    for(int i=0; i<8; i++)
    {
     cout << "Arr["<<i<<"] = "<<Arr[i]<< endl;
    }

    for (int i=0;i<8;i++){
      //cin>>Arr[i];
      sum=sum+Arr[i];
      avg=sum/8;
      }

      h= Arr[0];
      for (int i=0;i<8;i++){
        if (Arr[i]>h){
            h=Arr[i];
        }
    }

      l= Arr[0];
      for (int i=0;i<8;i++){
        if (Arr[i]<l){
            l=Arr[i];
        }
    }
      cout<< "avg : "<<avg<<endl;
      cout<< "Max number : "<<h<<endl;
      cout<< "Min number : "<<l<<endl;

}
Nogi Chan — 01/31/2022
https://www.programiz.com/cpp-programming/examples/concatenate-string
C++ Program to Concatenate Two Strings
In this example, you will learn to concatenate (join) two strings (both string objects and C-style strings).
RedW1ne — 01/31/2022
asm
double
new
switch
auto
else
operator
template
break
enum
private
this
char
for
register
typedef
class
friend
return
union
https://www.geeksforgeeks.org/cpp-keywords/
GeeksforGeeks
C++ Keywords - GeeksforGeeks
A Computer Science portal for geeks. It contains well written, well thought and well explained computer science and programming articles, quizzes and practice/competitive programming/company interview Questions.
Image
Nogi Chan — 01/31/2022
asm    double    new    switch
auto    else    operator    template
break    enum    private    this
case    extern    protected    throw
catch    float    public    try
char    for    register    typedef
class    friend    return    union
const    goto    short    unsigned
continue    if    signed    virtual
default    inline    sizedof    void
delete    int    static    volatile 
do    long    struct    while
RedW1ne — 03/01/2022
@Nogi Chan
Adian — 03/01/2022
Sir I also consulted with the other faculty. He is also facing with the same issue of so many time clashes.
Can you please give me further instrcution upon the case
Nogi Chan — 03/04/2022
@Adian
Adian — 03/04/2022
https://dyclassroom.com/boolean-algebra/product-of-sums-reduction-using-karnaugh-map
Adian — 03/11/2022
Image
RedW1ne — 03/28/2022
@Adian
RedW1ne — 03/29/2022
https://forms.office.com/pages/responsepage.aspx?id=a3OGX0PvkkmWJAbcburwl6RhAEW7qR1Ghjy9KAy13C9UMENLMVpDT1FFMFpXSElQQlpPSDVBSkNVSSQlQCNjPTEu
Microsoft Forms
RedW1ne — 03/29/2022
Image
Adian — 04/01/2022
Image
Adian — 04/21/2022
Attachment file type: acrobat
jhjgc_2.pdf
1.22 MB
Adian — 04/21/2022
@Nogi Chan
@RedW1ne
Adian — 04/24/2022
Image
Adian — 04/25/2022
amr kotha shunos na ? :3
RedW1ne — 04/25/2022
Na
xD
aiub-discobot
 just landed.
 — 05/06/2022
RedW1ne — 05/06/2022
@everyone
Nogi Chan — 05/06/2022
bhai
ay
bhugi te
Adian — 06/03/2022
Image
Image
Samiha Hossain
 hopped into the server.
 — 06/04/2022
RedW1ne — 06/04/2022
@Samiha Hossain
Nogi Chan — Today at 10:31 PM
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
Expand
message.txt
5 KB
﻿
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style>
		#filename {
			position: relative;
			top: 20px;
			left: 300px;
			font-weight: bolder;
		}
	</style>
</head>
<body>

	<?php 
		$firstname = "";
		$firstnameErrMsg = "";
		$lastname = "";
		$lastnameErrMsg = "";
		$gender = "";
		$genderErrMsg = "";
		$email = "";
		$emailErrMsg = "";
		$mobileno = "";
		$mobilenoErrMsg = "";
		$address1 = "";
		$address1ErrMsg = "";


		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['firstname']);
			$lastname = test_input($_POST['lastname']);
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : "";
			$email = test_input($_POST['email']);
			$mobileno = test_input($_POST['mobileno']);
			$address1 = test_input($_POST['address1']);
			$country = isset($_POST['country']) ? test_input($_POST['country']) : "";

			$message = "";
			if (empty($firstname)) {
				$firstnameErrMsg = "First Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
				$firstnameErrMsg = "Only letters and spaces allowed.";
				}
			}

			$message = "";
			if (empty($lastname)) {
				$lastnameErrMsg = "Last Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
				$lastnameErrMsg = "Only letters and spaces allowed.";
				}
			}
			/*if (empty($lastname)) {
				$lastnameErrMsg = "Last Name is Empty";
				$message .= "Last Name is Empty";
				$message .= "<br>";*/

			$message = "";
			if (empty($gender)) {
				$genderErrMsg = "Gender not selected";
			}
			/*else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$gender)) {
				$genderErrMsg = "Only letters and spaces allowed.";
				}
			}*/

			$message = "";
			if (empty($email)) {
				$emailErrMsg = "Email is Empty";
				/*$message .= "Email is Empty";
				$message .= "<br>";*/
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$message .= "Please correct email.";
					$message .= "<br>";
				}
			}

			$message = "";
			if (empty($mobileno)) {
				$mobilenoErrMsg = "Mobileno is Empty";
				/*$message .= "Mobileno is Empty";
				$message .= "<br>";*/
			}

			$message = "";
			if (empty($address1)) {
				$address1ErrMsg = "Street/House/Road is Empty";
				/*$message .= "Street/House/Road is Empty";
				$message .= "<br>";*/
			}

			if (!isset($country) or empty($country)) {
				$message .= "Country not Seletect";
				$message .= "<br>";
			}

			
			if ($message === "") {
				echo "Registration Successful";
			}
			else {
				echo $message;
			}
		}
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>General</legend>

			<label for="fname">First Name</label>
			<input type="text" name="firstname" id="fname" value="<?php echo $firstname; ?>">

			<span><?php echo $firstnameErrMsg; ?></span>

			<br><br>

			<label for="lname">Last Name</label>
			<input type="text" name="lastname" id="lname">

			<span><?php echo $lastnameErrMsg; ?></span>

			<br><br>

			<label>Gender</label>
			<input type="radio" name="gender" id="male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female">
			<label for="female">Female</label>

			<span><?php echo $genderErrMsg; ?></span>
			
			<br><br>

			<p id="filename">Group_XX_StudentId</p>

		</fieldset>

		<fieldset>
			<legend>Contact</legend>

			<label for="email">Email</label>
			<input type="email" name="email" id="email">
			<span><?php echo $emailErrMsg; ?></span>

			<br><br>

			<label for="mobileno">Mobile No</label>
			<input type="text" name="mobileno" id="mobileno">
			<span><?php echo $mobilenoErrMsg; ?></span>

			<br><br>

		</fieldset>

		<fieldset>
			<legend>Address</legend>

			<label for="address1">Street/House/Road</label>
			<input type="text" name="address1" id="address1">
			<span><?php echo $address1ErrMsg; ?></span>

			<br><br>

			<label for="country">Country</label>
			<select name="country" id="country">
				<option value="bd">Bangladesh</option>
				<option value="usa">United States of America</option>
			</select>

			<br><br>

		</fieldset>

		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>
message.txt
5 KB