#Requirements:

1.)XAMPP Server

2.)An internet connection to run Facebook API, jquery, bootstrap files.

3.)Since the Facebook API is in development mode and not in live mode, preferably keep all the files in XAMPP/htdocs/project/, and

##Only the test users ids generated by facebook can be used for API-
   
   1.)username- soumya_hsugvav_agarwal@tfbnw.net password- soumya123
   2.)username- aditya_ceidpgs_gupta@tfbnw.net password- aditya123
   3.)username- pranjal_cpbyftz_tripathi@tfbnw.net password- pranjal123
   4.)username- open_igrhwvq_user@tfbnw.net password- testuser123
   
4.)import sphinx.sql
5.)Open localhost/project/homepage.php
6.)Registration of admin has to be done manually by changing in database, in sphinx database, table users, in column admin value has to be set to 1


The website provides login signup (also sigup with FB).

the website has an interface to add questions and new quizes for admins.
quizes can be of any type (mcq , multi correct , subjective or mixed).
if the quiz is subjective or mixed then the result of quiz wont be published for a user untill admin checks all the subjective questions for that user in that quiz.


A user can take any quiz available only once.
his/her result will be sent to his/her profile.
if the quiz is subjective or mixed type, then result wont be published untill admin checks all the subjective questions.

the website also has a leaderboard displaying performance of all users for particular quiz.

the website also has a discussion forum for each quiz separately.

once a user has sumitted his/her first question then he can't use back button, every use of back button would push him forward in the quiz.

