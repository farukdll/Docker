<h1 align="right"> <a name="up"></a>

# Docker
<h1 align="left">
    <p> <img height="100" width="120" alt="Docker" src="https://github.com/farukdll/Docker/assets/97880185/04ad9ed4-e6e3-4e22-a2ed-bfe5f5979140"> </h1>
<!--
### Turkish Version of the README
* [Turkish Version]()-->


## Table of Contents
1. [What is Docker and Why Do We Need It ?](#widawdwni)
   * [What is Docker ?](#wid)
   * [Why Do We Need Docker ?](#wdwnd)
   * [What Are the Advantages of Docker ?](#watafd)
2. [What is Container and Comparison with Hypervisor](#wicacwh)
   * [What is a Container ?](#wiac)
   * [What is Hypervisor (VM) ?](#wihvm)
   * [Differences and Advantages of Containers and Hypervisors](#daaocah)
3. [What are Docker Engine and Tools?](#wadeat)
   * [What is the Docker Engine ?](#witaee)
   * [What is a Docker Daemon ?](#wiaddd)
   * [What is Docker CLI (Command Line Interface) ?](#widclicli)
4. [What is Dockerfile Structure and Image ?](#widsai)
   * [What is Dockerfile Structure and What are its Features ?](#widsawaif)
   * [What is Docker Image ?](#widiii)
   * [Creating and Managing Docker Images](#camdi)


#### What is Docker and Why Do We Need It ? <a name="widawdwni"></a>
  * ###### What is Docker ? <a name="wid"></a>
    * ###### Docker is a platform that allows you to run different applications on your computer in an isolated way. Each application runs inside a container, which is an isolated environment at the operating system level. This allows applications to run seamlessly on different computers. It is also used to share development environments, move and deploy applications. Docker accelerates and standardizes application development and deployment processes.
  * ###### Why Do We Need Docker ? <a name="wdwnd"></a>
    * ###### Docker is revolutionary in software development processes. This technology packages software applications, making them portable and able to run in any environment. Docker containers, once created, can run effortlessly on any computer, server, or in the cloud.
    * ###### This portability allows for quick transition between developing, testing, and production environments. Moreover, Docker helps reduce conflicts between applications, allowing each application to run in its isolated environment. This enhances security and minimizes the risk of one application affecting another.
    * ###### Docker also helps in utilizing resources more efficiently. It enables running multiple applications isolated from each other on a single server, minimizing resource waste and reducing the likelihood of interactions between applications.
    * ###### In summary, Docker standardizes software development processes, ensures smooth operation of applications, helps optimize resource usage, and enhances security. This makes your software development process faster, more reliable, and more flexible.
  * ###### What Are the Advantages of Docker ? <a name="watafd"></a>
    * ###### Separates applications from each other, preventing any interaction.
    * ###### It enables fast deployment, meaning you can start and stop applications quickly.
    * ###### It consumes few resources, which increases efficiency.
    * ###### It does not use a hypervisor and does not have a fully installed operating system, so it is up and running and ready to use in seconds.


#### What is Container and Comparison with Hypervisor <a name="wicacwh"></a>
  * ###### What is a Container ? <a name="wiac"></a>
    * ###### Containers are isolated working environments at the operating system level. Each Container contains everything an application or service needs to run: files, libraries, settings and other components necessary for the application to run.
    * ###### This isolation allows each Container to run independently of the others. That is, the application in one Container does not affect the application in another Container. This makes it possible to run applications in a more secure, portable and efficient way.
    * ###### Containers enable developers to avoid compatibility issues when moving their applications to different environments. They also make software development processes more efficient by enabling faster deployment, scaling and management.
    <h1 align="center">
    <p>
        <img height="210" width="750" src="https://github.com/farukdll/Docker/assets/97880185/6852b36d-6e4e-4b3a-bd79-ee5b2f6ed855">
    </h1> <p> </p>
  * ###### What is Hypervisor (VM) ? <a name="wihvm"></a>
    * ###### Hypervisor is software or hardware that allows you to run different operating systems in isolation by creating virtual machines on physical hardware. It allows you to run multiple operating systems simultaneously by dividing a physical machine with virtual machines.
    * ###### Hypervisor (VM) Examples:
      * ###### VMware vSphere/ESXi: A powerful Hypervisor for large data centers.
      * ###### Microsoft Hyper-V: A Windows-based hypervisor with a wide range of features.
      * ###### Oracle VM VirtualBox: User-friendly and can run on a variety of operating systems.
      * ###### Citrix Hypervisor (XenServer): A hypervisor offering scalable cloud solutions.
      * ###### KVM (Kernel-based Virtual Machine): An open source Hypervisor based on Linux.
    <h1 align="center">
    <p>
        <img height="210" width="750" src="https://github.com/farukdll/Docker/assets/97880185/06dc5685-faa4-44bd-bec4-e48b3065238a">
    </h1> <p> </p>
  * ###### Differences and Advantages of Containers and Hypervisors <a name="daaocah"></a>
    * ###### Differences :
      * ###### Containers:
        * ###### The host shares resources with the operating system and provides its isolation in this way.
        * ###### They are lighter and consume fewer resources because the host operating system allocates resources.
      * ###### Hypervisors:
        * ###### Each one hosts its own full operating system, offering a completely isolated environment.
        * ###### They use more resources because each one runs its own operating system.
    * ###### Advantages :
      * ###### Containers:
        * ###### They start faster and offer high performance because they are lighter.
        * ###### They speed up software development processes because they are quickly launched and deployed.
      * ###### Hypervisors:
        * ###### They offer a more secure environment by providing complete isolation but consume more resources.
        * ###### They support different operating systems, making them easy to use on various platforms.
    <h1 align="center">
    <p>
        <img height="350" width="500" src="https://github.com/farukdll/Docker/assets/97880185/05bb9133-ab56-4ee4-9400-f813d036b74c">
    </h1> <p> </p>


#### What are Docker Engine and Tools ? <a name="wadeat"></a>
  * ###### What is the Docker Engine ? <a name="witaee"></a>
    * ###### Docker Engine is an open source container technology for building your applications. It is the bridge between the operating system and the image, i.e. Docker itself. When we use a Docker command through the Docker CLI, the Docker Engine is contacted to do what needs to be done. Docker Engine is the part where we set the entire lifecycle and limitations of the container. Thanks to Docker Daemon, containers work in the same environment in isolation from each other.
    <h1 align="center">
    <p>
        <img height="300" width="700" src="https://github.com/farukdll/Docker/assets/97880185/5469eb17-1138-4661-9e07-62513fd981e8">
    </h1> <p> </p>
  * ###### What is a Docker Daemon ? <a name="wiaddd"></a>
    * ###### Docker Daemon is the core component of Docker that runs in the background. It receives and processes Docker commands. That is, it accepts Docker commands and enables the creation, stopping and management of containers. This creates the necessary environments for containers to run in isolation.
    * ###### Docker Daemon is the docker equivalent of Hypervisor. is the section where all operating system-related tasks such as CPU, RAM, etc., are handled.
    <h1 align="center">
    <p>
        <img height="350" width="500" src="https://github.com/farukdll/Docker/assets/97880185/24cf7360-a383-441a-bacb-9caee183eb52">
    </h1> <p> </p>
  * ###### What is Docker CLI (Command Line Interface) ? <a name="widclicli"></a>
    * ###### Docker CLI (Command Line Interface) is the interface that allows us to use Docker via the command line. Users can perform various functions of Docker by typing Docker commands into the terminal or command client. These commands allow us to perform Docker's operations such as creating, running, stopping, deleting containers.


#### What is Dockerfile Structure and Image ? <a name="widsai"></a>
  * ###### What is Dockerfile Structure and What are its Features ? <a name="widsawaif"></a>
    * ###### Dockerfile is a text-based file that describes how to create Docker images step by step. Each line contains a command or directive.
    <h1 align="center">
    <p>
        <img height="200" width="650" src="https://github.com/farukdll/Docker/assets/97880185/e276e48c-0035-4803-9616-42c742672a61">
    </h1> <p> </p>
    
    * ###### FROM Command:
      * ###### Located at the beginning of the Dockerfile. It specifies from which `base image`  the image will be created. For example, `FROM ubuntu:latest`  indicates that an Ubuntu-based image will be used.
    * ###### RUN Command:
      * ###### Specifies commands to run when creating  a Docker image. These commands are run inside the image and are used to accomplish a specific state. For example, the `RUN apt-get`  update command updates the package list.
    * ###### COPY and ADD Commands:
      * ###### It is used to copy files or directories from the host machine to the Docker image. While the `COPY`  command is used to copy files, the `ADD`  command can copy files and perform additional operations such as downloading files from a URL.
    * ###### CMD and ENTRYPOINT Commands:
      * ###### Specifies the commands to run when the created Docker container is started. `CMD`  specifies the default commands when starting the container, while `ENTRYPOINT`  specifies the commands to run with an argument.
    * ###### ENV Command:
      * ###### Used to define environment variables. This command sets the values of environment variables in the Docker image.
  * ###### What is Docker Image ? <a name="widiii"></a>
    * ###### A Docker Image is a structure that contains all the components required for the application or system you want to run. This includes the operating system, application code, libraries and other dependencies. They are created using Dockerfile and each has its own layers. These layers extend a base structure and can be shared on platforms like Docker Hub or you can create your own custom images.
    <h1 align="center">
    <p>
        <img height="200" width="650" src="https://github.com/farukdll/Docker/assets/97880185/e276e48c-0035-4803-9616-42c742672a61">
    </h1> <p> </p>
    
    * ###### You can access the Docker Image list from this link (DockerHub Official Site)
      * ###### [🢣 Click-Here 🢢](https://hub.docker.com/search?q=&type=image)
    * ###### Docker Image commands:
      * ###### The `docker images`  is used to list the Docker images available locally on your computer. When this command is run, all images on the system are listed, depending on the Docker Engine.
        ```
        docker images
        ```
      * ###### The `docker pull imageName`  is used to download the specified image (such as `nginx` ) from the Docker Hub or the specified Docker Registry to your local machine.
        ```
        docker pull imageName (nginx)
        ```
      * ###### `docker run -d imageName`  is used to run the specified image in the background using the -d flag. That is, it creates a new container in Docker to run the specified image.
        ```
        docker run -d imageName
        ```
      * ###### `imageID/imageName`  represents the current image and `tagName`  represents the new tag. In this way, the same image can be assigned different tags and given more descriptive names for different versions or situations.
        ```
        docker image tag imageID/imageName tagName
        ```
      * ###### `docker image push imageName:tagName`  is used to upload the specified image to a remote repository such as Docker Registry or Docker Hub. `imageName:tagName`  specifies the name and tag of the image to be sent. With this command, you can upload a local image to a remote repository to share it and make it accessible to users.
        ```
        docker image push imageName:tagName
        ```
      * ###### `docker image push --all-tags imageName`  is used to push all tags of the specified image to a remote repository such as a Docker Registry or Docker Hub. The `--all-tags`  flag ensures to push all tags of the image. This allows you to transfer different versions of a given image to a remote repository in a single operation.
        ```
        docker image push --all-tags imageName
        ```
      * ###### The `docker image push --all-tags farukdll/counter-app`  is used to push a Docker image with all tags named "farukdll/counter-app" to a remote Docker Registry or Docker Hub. That is, all versions or tags of the specified image are transferred to a remote repository.
        ```
        docker image push --all-tags farukdll/counter-app
        ```
      * ###### The `docker image tag counter-app farukdll/counter-app`  assigns a new tag "farukdll/counter-app" to a Docker image named "counter-app". That is, it is used to add a new name or label to an existing image. In this way, the same image can be identified with different tags and used in different environments.
        ```
        docker image tag counter-app farukdll/counter-app
        ```
      * ###### The `docker rmi imageName`  is used to delete an image with a name specified in Docker. The name or ID of the image to be deleted is specified with the command. This command will permanently delete the specified image.
        ```
        docker rmi imageName
        ```
      * ###### The `docker build -t imageName path/to/Dockerfile`  is used to create Docker images. This command creates an image by following the steps specified in the file called Dockerfile. It is typically used to convert project files into an image. The `-t`  flag allows you to give the created image a name. `imageName`  is the name of the image to be created. `path/to/Dockerfile`  specifies the path to the Dockerfile.
        ```
        docker build -t imageName path/to/Dockerfile
        ```
      * ###### `docker history imageName`  is a command that shows the layers of a Docker image and how each layer is built. `imageName`  is the name of the Docker image you want to operate on.
        ```
        docker history imageName
        ```
      * ###### `docker inspect objectName`  is a command that allows you to get detailed information about Docker objects. `objectName`  is the name or ID of the Docker object you want to get information about (for example, container name, image name or ID).
        ```
        docker inspect objectName
        ```
      * ###### The `docker save -o outputFileName.tar imageName`  , `docker save`, is a command used to convert Docker images to an archive file. This command is used to export images and move them to a different environment (for example, to another Docker installation or a server). `-o outputFileName.tar`  is the name and extension of the file where the exported images will be saved. `imageName`  is the name or ID of the Docker image to be exported.
      * ###### This command saves the specified image into a .tar archive file. You can later load this archive file into another Docker environment using the `docker load`  command.
        ```
        docker save -o outputFileName.tar imageName
        ```
      * ###### `docker load -i imageTarFile.tar`  - `docker load`  and `docker save`  is used to load Docker images exported with into a Docker daemon. `-i imageTarFile.tar`  is the name of the .tar archive file containing the images you want to load.
      * ###### The `docker save`  ,takes the previously exported images and uploads them to your Docker environment. This way you can move images between different Docker environments or between servers.
        ```
        docker load -i imageTarFile.tar
        ```
  * ###### Creatings and Managings Docker Images <a name="camdi"></a>
      * ###### Docker images are created through text files called Dockerfiles. These files specify how to assemble the operating system, libraries, dependencies and other components that the application needs. Using the Docker CLI (Command Line Interface), these Dockerfiles are processed with the build command and the image is created. The created images are managed by the Docker daemon. These images can be stored locally or shared in remote storage areas such as Docker Hub. Also, images can be listed, deleted, updated and managed with Docker CLI.


|[ ⬆︎  Up](#up)|
|      :-:     |
