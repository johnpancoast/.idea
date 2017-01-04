# .idea/ reusable project files for intellij

At the moment it just includes File templates for intellij idea (and possibly other intellij products).

Includes templates for

* PHP

## Usage
I use this as per-project settings in idea (there might be another way, default
settings etc) but this works.

so for each project, do this...

* Close the project in your IDE.
* Copy this repository's contents to the `.idea/` directory of your project or
  do something equivalent to this:

    ###### CLI example
    ```bash
    cd .idea/
    git init
    git remote add origin git@github.com:johnpancoast/.idea.git
    git merge origin/master # assuming no file conflicts
    ```
* Re-open the project. *`Idea` seems to load the templates on open and save them
  into memory so the files will be overritten with whatever you create in
  IDE. It's better just to close the project when dealing with the template
  files IMO.*.
* In the IDE go to `[settings] > Editor > File and Code Templates`.
* Change the `Schema` option to "Project". 
* Select the `Include` tab.
* Select the `Settings` include file and edit the settings for your project.
