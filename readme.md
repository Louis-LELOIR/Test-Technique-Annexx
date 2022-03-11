#Technical Test for Annexx Company

##User manual:

1- This Technical Test is avaible on my Github Public Repository (that means you dont need SSH key). To download it, just copy the https link of the repo.
I highly recommand you to use  a Bash Shell in order to avoid compatibility problems.


2- 
--> If you are a Windows User : I highly recommand you to use WSL 2. If you're not used to manage your projects with WSL 2, just open the Git Bash Shell.

--> If you are a Linux User : just open a Bash Shell.

When your shell is opened, move to your projects directory and paste that :
git clone https://github.com/Louis-PLAQUET/Test-Technique-Annexx.git


3- In order to facilitate the deployment of this project, I have created a Dockerfile and a docker-compose.yml files.
That means you should configure Docker & Docker-Compose on your laptop before running the project.

I suggest you to follow the instructions on this website : https://www.bundleapps.io/blog/docker-series/pt-1-installing-docker-and-docker-compose

N.B : for Linux users, you will likely meet a permission problem due to the current User isn't yet a member of the docker group. I suggest you to follow the steps on this website (it helped me a lot) : https://www.configserverfirewall.com/ubuntu-linux/add-user-to-docker-group-ubuntu/



4- When Docker and Docker-Compose are correctly installed , paste those commands : 
cd technical_test_Annex_company
docker-compose build
docker-compose up


5- The project is running on localhost:8080.


6- To cut Docker-Compose, paste that :
docker-compose down