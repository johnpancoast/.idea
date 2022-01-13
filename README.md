# .idea (reusable intellij project files)

*This project is defunct and just here to see old examples.*

Project files for intellij IDEA (and possibly other intellij IDEs).

Includes templates for

* PHP

## Usage
I use file templates as [per-project
settings](https://www.jetbrains.com/help/idea/2016.3/file-and-code-templates.html#d2040410e142)
in idea (there might be another way, default settings etc) but this works.

so for each project, do this...

* Close the project in your IDE. *`Idea` seems to load the templates on open
  one time and saves them to memory. It then updates the files as you edit in
  your IDE, so this seems safest.*
 
* Copy this repository's contents to the `.idea/` directory of your project or
  do something equivalent to this:

    *CLI example*

    ```bash
    cd .idea/
    git init
    git remote add origin git@github.com:johnpancoast/.idea.git
    git pull origin master
    ```
* Re-open the project (either ignore message in IDE about new git repo or remove `.idea/.git` directory).
* In the IDE go to `[settings] > Editor > File and Code Templates`.
* Change the `Schema` option to "Project" (the option is up top, to the right). 
* Select the `Include` tab.
* Select the `Settings` include file and edit the settings for your project.
