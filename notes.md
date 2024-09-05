# IT & C 210: Web Systems and Security

## 1. Introduction

**Command Line Interface**
Some basic CLI commands that are new to me:

- `ifconfig` : show the configurations for the current IP address
- `passwd` : change the password for the current user
- `apt-get` : package manager for Ubuntu
- `chmod` : change the permissions for a file or directory
- `chown` : change the owner of a file or directory
- `ssh` : secure shell to connect to a remote server (remote into another machine securely)
- `scp` : secure copy to copy files from one machine to another

- A note about the `chmod` command:
mode: Specifies the permissions to set. You can define these either in numeric form or symbolic form:
Numeric (octal) mode: Permissions are represented by a three-digit number (e.g., 755, 644).
- 4 = Read (r)
- 2 = Write (w)
- 1 = Execute (x)

For git commands, one way to connect a local repository to a remote repository is to use the `git remote add origin <url>` command. This will add a remote repository to the local repository, and then you can use the `git push` command to push the local repository to the remote repository. Sometimes the command `git push origin main` is needed. Also try using the `-u` flag with the `git push` command to set the upstream branch.
**Lecture 9/4 Introduction**
This is a gateway class, not a weed-out class. Prof. Redd doesn't like or believe in weed-out courses which is good. 

IT requires self-learning. All of the programming languages used in this class, with exception to SQL, Professor Redd had to learn after he graduated, outside of a formal programming class. I will likely have to do the same in my career.

Prof Redd actually expects me to jump on Google and find things out in the moment during class. Give myself a green light to go and do that.

Expectations for the readings are that they are not required, they are simply to supplement what I learn in class and give me extra help for homework and labs if I need it.

> As I looked at the syllabus, I had a moment of anxiety about the pace of the class, if it is too fast, and about if I will really be able to learn all that I don't know. I remembered and recognized that not knowing much of the subject matter on day 1 is exactly the point! If I knew it all on day 1, that would make this whole following semester a waste of my time. The first day/week *should* be full of not knowing the subjects, but getting glimpses and ideas of what I will learn and what those things mean. Then I simply take those and learn with diligent, enthusiam, curiousity, and meekness/humility.

**Rhythm of the Class:**

- Monday:
    Lecture, Demo, live Q&A
    Lab period
- Wednesday:
    Lecture
    Lab period, TA Kickoff the next lab
    Lab pass-off due for the previous lab
- Friday:
    Lecture
    In-class quiz (some weeks)
    Homework or Lab write-up due (alternating weeks)

Keys to success: ***Integrity and Persistence***

### Some HTML Stuff

HTML is a declarative language, which means that information is simply given, and then something else (in this case a browser) interprets and renders the information that is "declared" in the HTML file.

A useful website is the [Markup Validation Service](https://validator.w3.org/), which will check your HTML code for errors and give you feedback on how to fix them, based on widely accepted web standards.

The `DOCTYPE` usually is where the HTML version is declared. Typing `html` simply defaults the DOCTYPE to the latest version of HTML. This is important because the version of HTML affects some of the default structures.

> There is no good reason to use a previous HTML version, according to Prof. Redd.

A good way to think about `head` and `body` elements, is that the `head` element contains metadata, and the `body` contains data.

> Git submodules are a way to include a repository within another repository.
