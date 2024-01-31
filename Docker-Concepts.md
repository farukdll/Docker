<h1 align="right"> <a name="up"></a>

# Docker
<h1 align="left">
    <p> <img height="100" width="120" alt="Docker" src="https://github.com/farukdll/Docker/assets/97880185/04ad9ed4-e6e3-4e22-a2ed-bfe5f5979140"> </h1>

### Turkish Version of the README
* ###### Turkish Version [⇨ Click-Here ⇦](https://glitter-muskox-81c.notion.site/Docker-Kavramlar-26445d0f84ad47078d28e422e0989ebf?pvs=4)


### Table of Contents
1. [What is Docker and Why Do We Need It ?](#widawdwni)
   * [What is Docker ?](#wid)
   * [Why Do We Need Docker ?](#wdwnd)
   * [What Are the Advantages of Docker ?](#watafd)
2. [What is Container and Comparison with Hypervisor](#wicacwh)
   * [What is a Container ?](#wiac)
   * [What is Hypervisor (VM) ?](#wihvm)
   * [Differences and Advantages of Containers and Hypervisors](#daaocah)
3. [What are Docker Engine and Tools ?](#wadeat)
   * [What is the Docker Engine ?](#witaee)
   * [What is a Docker Daemon ?](#wiaddd)
   * [What is Docker CLI (Command Line Interface) ?](#widclicli)
4. [What is Dockerfile Structure and Image ?](#widsai)
   * [What is Dockerfile Structure and What are its Features ?](#widsawaif)
   * [What is Docker Image ?](#widiii)
   * [Creating and Managing Docker Images](#camdi)
5. [What are Docker Hub, Registry, Repository and Client ?](#wadhrrac)
   * [What is Docker Hub and How are Private Repositories Processed ?](#widhahappp)
   * [What is Docker Registry and What Does It Do ?](#widrawdid)
   * [What is Docker Repository(Center Where Images are Stored) ?](#widrcwias)
   * [What are Docker Registry and Repository Differences ?](#wadrard)
   * [What is Docker Client ?](#widcccc)
6. [What is Docker Compose and Service Management ?](#wwidcasm)
   * [What is Docker Compose ?](#wwidcs)
   * [Docker Compose File Structure and Usage](#wdcfsau)
7. [What is Docker Volume and Data Management ?](#widvadm)
   * [What is Docker Volume ?](#wiidv)
   * [Importance and Structure of Docker Volume Usage](#iasodvu)
   * [Docker Data Persistence and Data Management Strategies](#ddpadms)
8. [What is Docker Network Configuration ?](#widnccn)
   * [How to Create and Configure Docker Networks ?](#htcacdn)
   * [What are Safety and Isolation Principles ?](#wasaips)
9. [What is Docker Security and Best Practices ?](#widsabp)
   * [What are Docker Security Policies and Practices ?](#wadspap)
   * [Sensitive Information Management and Env File Usage](#simaefu)
10. [Docker Web Server and Protocols ?](#dwsaps)
    * [What is NGINX ? What are the Uses and Features of NGINX ?](#winwatuafon)
    * [TLS Protocols and Security Applications](#tlspasas)
11. [Docker Database and Application Setup ?](#ddappsp)
    * [How Docker Database and Application Setup Works :](#hddapsws)
    * [What is MariaDB ?](#wimdb)
    * [What is WordPress ?](#wiowpss)
    * [What is the Relationship between MariaDB and WordPress ?](#witrbmawpss)
    * [Running MariaDB on Docker and WordPress Database Integration](#rmodawdin)
    * [Database Management and Configuration :](#dmacgon)
    * [Database Security :](#dtbsscrty)
    * [Database Connectivity with Docker Compose :](#dcwdspse)
12. [What is Docker DNS Configuration and Domain Names ?](#widdnscadns)
    * [Domain Routing and DNS Configuration](#dradnscn)
    * [Use and Importance of Domain Names](#uaiodns)



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
    * ###### We can think of it as the process we get when we run any image.
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
      * ###### [⇨ Click-Here ⇦](https://hub.docker.com/search?q=&type=image)
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
        docker rmi imageName / docker rm imageName / docker rm -f imageName/
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


#### What are Docker Hub, Registry, Repository and Client ? <a name="wadhrrac"></a>
  * ###### What is Docker Hub and How are Private Repositories Processed ? <a name="widhahappp"></a>
    * ###### What is Docker Hub ?
      * ###### Docker Hub is a cloud-based platform where users store, share and manage Docker containers. This platform allows users to explore ready-made container images and easily share images they create themselves. It is a platform with a large image collection.
      * ###### Docker Hub, as we are familiar from Github, is an open source space where docker images can be uploaded and downloaded.
    <h1 align="center">
    <p>
        <img height="350" width="650" src="https://github.com/farukdll/Docker/assets/97880185/52876ae3-5a91-421c-9693-b99871677d3f">
    </h1> <p> </p>
    
    * ###### What is a Private Warehouse ?
      * ###### Private repositories are repositories where Docker images are stored privately and can only be accessed by specific users or organizations. Ideal for internal use or special projects.
    * ###### Install Docker Images in Private Repository :
      * ###### Create your images on your local machine or use an existing image.
      * ###### Label your Docker image  :  `docker tag local-image:tagname repo-name:tagname`
      * ###### Load to private warehouse  :  `docker push repo-name:tagname`
  * ###### What is Docker Registry and What Does It Do ? <a name="widrawdid"></a>
    * ###### Docker Registry is a place where Docker images are stored and is usually the structure where Docker repositories are hosted. It is used to store and manage Docker images. Docker Hub is one of these registries and is usually publicly available. However, companies or users can create their own private Docker Registry.
    * ###### For example, let's say you want to store Docker images of a custom software in-house. Instead of storing these images in a public repository like Docker Hub, you can create your own private Docker Registry for internal use. This can be useful for meeting internal privacy requirements and storing private images in-house. This private registry can host images specific to your company and provide access with authorization.
    * ###### So, the Docker Registry is the structure where Docker images are stored and managed and can be public repositories like Docker Hub as well as private repositories. These repositories are used to manage, store and deploy Docker images.
    <h1 align="center">
    <p>
        <img height="330" width="650" src="https://github.com/farukdll/Docker/assets/97880185/7fda3ced-818d-4c70-9f8a-b136aed4e414">
    </h1> <p> </p>

  * ###### What is Docker Repository(Center Where Images are Stored) ? <a name="widrcwias"></a>
    * ###### Docker repositories are virtual storage spaces where Docker images are stored and shared. These repositories are centers where users can find ready-made images and store their own images.
    * ###### Public repositories like Docker Hub offer a large collection of images. This includes operating system images, popular services, compiled versions of software languages and more. These repositories enable the Docker community to share experiences and exchange images with each other.
    * ###### Private repositories are also important. Custom repositories are used to store and manage your own images, with special configurations for internal use, specific application versions or for security reasons.
    * ###### These repositories support the portable and flexible nature of Docker. Sharing, storing and accessing images becomes more seamless and efficient. It also brings together the experiences of the Docker community and streamlines software development processes.
    * ###### For example, to pull an Ubuntu image from the Docker Repository, you can type the following command in the terminal: `docker pull ubuntu`  is used to pull the specified image into your local Docker environment.
      ```
      docker pull ubuntu
      ```
    * ###### You can then use the following command to run this image in a local container  :  `docker run`  is the command to start a container in Docker.
      ```
      docker run
      ```
    * ###### `docker run -it ubuntu`  command is  `it` : These flags create an interactive terminal connection. `i`  flag allows interaction with the standard input. `t`  flag provides the terminal connection. `ubuntu`  The name of the image to be initialized. In this case, the "ubuntu" image is initialized.
      ```
      docker run -it ubuntu
      ```
  * ###### What are Docker Registry and Repository Differences ? <a name="wadrard"></a>
    * ###### Docker Registry :
      * ###### Docker Registry is a structure where Docker images are physically stored and is usually where Docker Repositories are hosted.
      * ###### Docker Registry is used to store, manage and deploy images. For example, Docker Hub is a Docker Registry that is usually publicly available.
      * ###### By creating a private Docker Registry, you can store your private images and access them with authorization.
      * ###### Docker Registry supports public repositories as well as private repositories. It is especially useful for meeting internal privacy requirements and storing private images.
    * ###### Docker Repository (Image Repository) :
      * ###### A Docker Repository is a virtual storage space where Docker images are stored and shared. These repositories are centers where users can find ready-made images and store their own images.
      * ###### In general, they can be of two types: public repositories, such as Docker Hub, or private repositories.
      * ###### Public repositories offer a large collection of images and allow the Docker community to share their experiences. It includes many different images such as operating system images, popular services, compiled software language versions, etc.
      * ###### Private repositories are where special images are stored for a specific user or organization. Ideal for internal use, security requirements or special projects.
      * ###### Docker Repository makes images portable and flexible. Storing, sharing and accessing images becomes easier and more efficient. It is a tool to share the knowledge of the Docker community.
    * ###### To Summarize :
      * ###### Docker Repository is the virtual storage where images are stored and shared; Docker Registry is the physical storage of these images and is used for repository management. Registry is the structure where repositories are hosted, and repositories are the places where images are stored.
      * ###### Images from Docker Hub are stored in a "repository". This repository is actually a place where images are located. These images are stored in a system called Docker Registry. The Registry is a place where Docker images are stored and distributed.
      * ###### So, when you take images from a place like Docker Hub and upload them to your own system, these images are actually registered in the Docker Registry. This registry contains details such as which repository the image is in, which tags it is associated with. In this way, by keeping your Docker images on the Docker Registry, you can pull and use these images whenever you want.
  * ###### What is Docker Client ? <a name="widcccc"></a>
    * ###### Docker Client is Docker's user interface and a tool for running Docker commands. Users send requests to the Docker Server (Docker Daemon) by entering Docker commands through Docker Client.
    * ###### Docker Client is usually run through the terminal or command line and performs various operations on the Docker Server with Docker commands.
    * ###### Let's explain the 3 commands you see in the image below for the client :
      * ###### `docker push`  allows you to upload a locally created Docker image to a remote Docker repository. That is, it is used to push an image you created on your local machine to a repository like Docker Hub.
        ```
        docker push user_name/image_name
        ```
      * ###### `docker pull`  allows you to download a Docker image from a remote Docker repository (usually Docker Hub) to your local machine. That is, it is used to pull images created by others to your machine.
        ```
        docker pull user_name/image_name
        ```
      * ###### `docker run`  is used to start a new container from a Docker image. That is, it creates and runs an executable container based on an image.
        ```
        docker run user_name/image_name
        ```
    <h1 align="center">
    <p>
        <img height="320" width="700" src="https://github.com/farukdll/Docker/assets/97880185/0604e165-c0b6-4844-ac3d-5430fddec595">
    </h1> <p> </p>
    
    * ###### Functions of the Docker Client :
      * ###### Image Management :
        * ###### Docker Client can search, download, upload, list images from Docker Hub or other Docker Registries.
      * ###### Container Operations :
        * ###### It can perform operations such as creating, starting, stopping, lifting and checking the condition of containers.
      * ###### Network Management :
        * ###### It can create, list, connect or disconnect networks from containers.
      * ###### Storage Management :
        * ###### Can perform storage management operations such as creating, connecting and listing storage volumes.
      * ###### System Information and Control :
        * ###### Provides information about the Docker configuration on the system, monitors resource utilization and can perform control operations on the Docker Daemon.


#### What is Docker Compose and Service Management ? <a name="wwidcasm"></a>
  * ###### What is Docker Compose ? <a name="wwidcs"></a>
    * ###### Docker Compose is a tool in Docker that brings together multiple containers into a single configuration file. This file contains the configuration of each container, the images to use, connections and other settings. That is, it specifies step by step how the different components (e.g. web server, database) will work. This way, you can manage and run your project more easily with Docker Compose.
    * ###### For example, if you use multiple services and different database, monitoring tools and cache services in your application, you don't need to start the application to connect these services each time. Instead, Docker Compose automatically starts these services with the configurations you have predefined. This allows your app to connect to these services seamlessly.
    <h1 align="center">
    <p>
        <img height="210" width="750" src="https://github.com/farukdll/Docker/assets/97880185/08defa4f-2926-49a9-a3f5-ae5cd381d080">
    </h1> <p> </p>
  * ###### Docker Compose File Structure and Usage <a name="wdcfsau"></a>
    * ###### Docker Compose File Structure :
      * ###### Docker Compose is usually configured in a file called `docker-compose.yml` . This file specifies the configuration of each container in your project. How the containers work, which images to use, connections and other settings are contained in this file. This structure specifies step by step how different components (e.g. web server, database) are put together.
      * ###### At the core of Docker Compose, a file called `docker-compose.yml`  is used to configure and manage Docker containers, much like Dockerfile does. This YML file has a structure that Docker Compose understands and specifies how to configure the services (e.g. web server, database) in the project.
      * ###### So, just like Dockerfile is used to create a Docker image, `docker-compose.yml`  is used to configure multiple services (containers). This file specifies step by step how the services (images, connections, environment variables, etc.) in the project will work. This is the core principle of Docker Compose, which allows you to easily manage the project from a single file.
    * ###### Docker Compose Service Usage :
      * ###### Docker Compose allows us to specify the properties of each service in detail.
      * ###### You can decide which image or Dockerfile the service will use.
      * ###### You can specify which port numbers to use.
      * ###### You can specify which services to associate files or folders with.
      * ###### You can clearly define which other services the service will connect with.
    * ###### Docker Compose .YML File :
      ```
      version: '3.8'

      services:
        webapp:
          image: nginx:latest
          ports:
            - "8080:80"
          networks:
            - mynetwork
          
        database:
          image: mysql:latest
          environment:
            MYSQL_ROOT_PASSWORD: mysecretpassword
          networks:
            - mynetwork
                
      networks:
        mynetwork:
          driver: bridge
      ```
    * ###### In the example above, two services are defined in the `.yml`  file: one for `webapp`  and one for `database`. While Nginx image is used for `webapp`  service, MySQL image is used for `database`  service. In addition, details such as which ports these services use and on which network they communicate are also specified.
    * ###### Using the `.yml`  file, you can run `docker-compose up`  to make all these services stand up and work together. This allows you to easily manage all the Docker services you need while developing your project in a single file.
    * ###### Let's explain the service definitions of .yml file above :
      * ###### `version: '3.8'`  Specifies the Docker Compose version of this YAML file. It defines the properties and available configurations of a specific Docker Compose version.
      * ###### `services`  This is where the services managed with Docker Compose start. Each service is identified by the configuration specified under it.
      * ###### `webapp`  Specifies the name of a service. This is the name of the service that will run in the project.
        * ###### `image: nginx:latest:`  Specifies the image to use for this service. In this case, the latest version of the image named nginx is used.
        * ###### `ports`  Specifies which port the service will communicate with the outside world and which port will be forwarded to which port. For example, port `8080`  is accessible from the outside and is forwarded to port 80 inside the container.
        * ###### `networks:`  Specifies on which network the service will communicate. In this example, the network named mynetwork is used.
      * ###### `database:`  A second service instance.
        * ###### `image: mysql:latest:`  Uses the latest version of the MySQL image for this service.
        * ###### `environment:`  Sets specific environment variables for the service. Here, for MySQL, an environment variable named `MYSQL_ROOT_PASSWORD` is defined and its value is `mysecretpassword`.
        * ###### `networks:`  The network configuration is the same for this service, i.e. the network named `mynetwork` is used.
      * ###### `networks:`  This is the section where Docker networks are configured.
        * ###### `mynetwork:`  Creates a network that allows the services in this YAML file to meet on the same network. it is a `bridge` type network and allows communication between services.


#### What is Docker Volume and Data Management ? <a name="widvadm"></a>
  * ###### What is Docker Volume ? <a name="wiidv"></a>
    * ###### Docker Volume is a mechanism for sharing and storing data between containers. Basically, this feature persists data within the container and allows data to be stored regardless of the lifetime of the containers.
  * ###### Importance and Structure of Docker Volume Usage <a name="iasodvu"></a>
    * ###### The Importance of Volume Utilization :
      * ###### Data is permanently stored even when containers are started, stopped or deleted. This prevents data loss.
      * ###### Facilitates data sharing between multiple containers.
      * ###### Data is easier to export, backup and restore.
    * ###### Structure of Volume Usage :
      * ###### Refers to a data repository created in Docker. This repository can be on the host file system or somewhere managed by Docker.
      * ###### Volumes connect to Docker containers and provide access to the data inside.
      * ###### Various volume types are available to store different types and structures of data (for example, local, named volume, or remote volume).
  * ###### Docker Data Persistence and Data Management Strategies <a name="ddpadms"></a>
    * ###### Docker Data Persistence :
      * ###### Volumes store data regardless of the lifetime of the containers, preventing data loss when containers are restarted or deleted.
      * ###### It provides an ideal structure for exporting, backing up and restoring data as needed.
    * ###### Docker Data Management Strategies :
      * ###### It is important that volumes are correctly created, managed and cleaned up when necessary.
      * ###### Data should be backed up periodically and these backups should be stored securely.
      * ###### Creating separate volumes for different data types or applications ensures data isolation and maintains data integrity.


#### What is Docker Network Configuration ? <a name="widnccn"></a>
  * ###### How to Create and Configure Docker Networks ? <a name="htcacdn"></a>
    * ###### Creating Docker Networks :
      * ###### Bridge Networks   :  Docker's default network. Every container connects to this network by default. This network is isolated from the host machine.
      * ###### Overlay Networks  :  It is used to connect multiple Docker hosts together. It provides communication between containers on multiple hosts.
      * ###### Macvlan Networks  :  Provides direct connectivity to physical network interfaces. Containers can act directly as physical network devices.
      * ###### Custom Networks   :  They are networks that are custom-built by the user. It can be used to meet the specific requirements of containers.
    * ###### Configuring Docker Networks :
      * ###### Subnet and IP Addresses  :  Each network has a subnet with a specific range of IP addresses and containers are assigned one of these IP addresses.
      * ###### DNS Configuration        :  Networks can have their own DNS configurations so that containers can access each other by DNS names.
      * ###### Connections and Contact  :  Containers can communicate and share data with each other through networks.
  * ###### What are Safety and Isolation Principles ? <a name="wasaips"></a>
    * ###### Security :
      * ###### Network Isolation    : Tight isolation is maintained between different networks so that network traffic can be kept under control.
      * ###### Network Segmentation : Different network segments can be managed with different security rules and policies.
    * ###### Isolation :
      * ###### Container Insulation : Each network provides its own isolation and containers within the network cannot interact directly with other networks.
      * ###### Network Security     : Enhances network security by providing network configuration, firewalls, network policies and access control.
  * ###### To Summarize :
    * ###### Docker network configuration is important for organizing communication between containers and ensuring security/isolation. Network configuration ensures that containers are isolated on separate networks and that security policies are applied so that a more secure structure can be created throughout the system. In this way, data sharing and communication between containers can be kept under control.


#### What is Docker Security and Best Practices ? <a name="widsabp"></a>
  * ###### What are Docker Security Policies and Practices ? <a name="wadspap"></a>
    * ###### Safety Principles :
      * ###### Image Security                           : It is important to use Docker images from trusted sources and security updates.
      * ###### Container Isolation                      : Tight isolation between containers must be ensured and containers must be protected against security vulnerabilities.
      * ###### Host Security                            : Docker on the host must be configured correctly and kept up to date.
      * ###### Security Monitoring and Monitoring Tools : Safety monitoring tools should be used on containers and monitored regularly.
    * ###### Applications :
      * ###### Security Analysis Tools       : Tools that detect vulnerabilities on Docker images and containers should be used.
      * ###### Tracking Updates              : Docker images and containers should be kept up-to-date and security updates should be applied regularly.
      * ###### Isolation and Access Controls : Docker network configuration and access control should be organized, isolation should be ensured and access controls should be applied.
  * ###### Sensitive Information Management and Env File Usage <a name="simaefu"></a>
    * ###### Management of Sensitive Information :
      * ###### Env Files      : Sensitive data is often managed through env (environment) files. These files are used to store and maintain environment variables.
      * ###### Env File Usage : Env files are especially ideal for storing sensitive information such as secret keys, passwords, API keys, etc. These files are usually located in the root directory of the project and are stored as .env.
    * ###### Best Practices :
      * ###### Env File Security               : Env files should be carefully protected for security reasons and should not be added to the version control system.
      * ###### Isolating Sensitive Information : When transferring Env files to containers within Docker, sensitive information should not be shared in an uncontrolled way.
      * ###### Env File Encryption             : Storing sensitive data encrypted in env files is important for security.
  * ###### To Summarize :
    * ###### Security, updating, isolation and sensitive data management form the basis of best practices in Docker. Secure storage of sensitive data, proper management of env files, and continuous monitoring of security practices are important to ensure security in a Docker environment. Management in accordance with these principles increases the security of the Docker environment and reduces potential security risks.


#### Docker Web Server and Protocols ? <a name="dwsaps"></a>
  * ###### What is NGINX ? What are the Uses and Features of NGINX ? <a name="winwatuafon"></a>
    * ###### What is NGINX ?
      * ###### NGINX is an open source web server and reverse proxy server software. It is particularly known for its performance and scalability. It is commonly used for high-traffic websites, content delivery networks (CDNs), reverse proxy and load balancer.
    * ###### Using NGINX :
      * ###### NGINX is often used as a web server. It is a tool for serving websites, applications or APIs to clients. It can also be used as a load balancer or reverse proxy. It is managed with configuration files and by editing these files, the desired features can be activated.
    * ###### Features of NGINX :
      * ###### It is known for its high performance. It can process and serve requests from clients quickly.
      * ###### It has traffic routing and load balancing features, which ensures traffic balance between different servers.
      * ###### Reverse Proxy Receives incoming requests, forwards them to the content server and returns the responses back to the client.
      * ###### Ideal for serving static files (HTML, CSS, JavaScript). It relieves server load by caching these files.
      * ###### Provides TLS/SSL encryption for secure connections.
      * ###### It can be extended with different modules and plugins, which allows for customizability.
  * ###### TLS Protocols and Security Applications <a name="tlspasas"></a>
    * ###### What is TLS ?
      * ###### TLS (Transport Layer Security) is a security protocol used to encrypt communication over the internet. During data transmission, it ensures that data is transmitted securely and confidentially. The previous version of TLS was SSL (Secure Sockets Layer).
    * ###### What are Security Practices :
      * ###### It enables data to be transmitted encrypted, thus preventing third parties from accessing the data.
      * ###### The authentication process between the server and the client establishes a trusted connection.
      * ###### It protects the integrity of the transferred data and prevents any modification of the data.
      * ###### Certificates are used to authenticate servers and ensure reliability.
    * ###### Security Protocols :
      * ###### TLS 1.2 and TLS 1.3: They offer the latest security features and enhancements. TLS 1.3 provides faster and more secure communication.
  * ###### To Summarize :
    * ###### NGINX is a web server and reverse proxy server known for its performance and scalability. TLS protocols are encryption protocols used to secure communication on the internet. These protocols provide a secure and performant structure for websites and applications.


#### Docker Database and Application Setup ? <a name="ddappsp"></a>
  * ###### How Docker Database and Application Setup Works : <a name="hddapsws"></a>
    * ###### Creating the MariaDB (Database) Container :
      * ###### First, the MariaDB container is created using tools such as Docker Compose or Docker CLI.
      * ###### If Docker Compose is used, a service is defined in the `docker-compose.yml`  file and the MariaDB image for this service is specified. The required configuration (e.g. database name, username, password) is specified here.
      * ###### If Docker CLI is used, the MariaDB image is run with the `docker run`  command in the terminal and the necessary configurations are specified in this command.
    * ###### Creating and Connecting to a WordPress (Application) Container :
      * ###### The WordPress application is likewise run as a container in Docker.
      * ###### If Docker Compose is used, a WordPress service is defined in the same file. The WordPress image is specified for this service and the necessary settings are made to connect with the MariaDB container.
      * ###### If using Docker CLI, the WordPress image is started as a separate container in the terminal. To be able to communicate with MariaDB, a connection between the networks is provided.
    * ###### Providing Connectivity and Managing Database Content :
      * ###### Since the WordPress container is on the same network as the MariaDB container, it can communicate with the database.
      * ###### During the installation process of WordPress, the user is prompted for database connection information, which communicates with the MariaDB container on the Docker network to connect to the database.
      * ###### The management and storage of WordPress' content takes place in the MariaDB database running on Docker. This content is stored and processed in the MariaDB container.
    * ###### Safety and Management :
      * ###### Database management is usually done with MariaDB's command line tool or graphical interfaces. Data manipulation and management operations are performed with SQL queries.
      * ###### Security is based on factors such as database access permissions, password strengthening and network access controls. The MariaDB container and database are protected by these security measures.
    * ###### To Summarize :
      * ###### When configured using Docker Compose, all these steps are usually written in a file (e.g. docker-compose.yml) and this file is run with Docker Compose to bring the containers together. Each container integrates with each other by communicating over Docker networks and the application can work seamlessly with the database. In this way, application and database installation is realized in the Docker environment.
  * ###### What is MariaDB ? <a name="wimdb"></a>
    * ###### MariaDB is an open source offshoot of MySQL and is a relational database management system (RDBMS). It is derived from MySQL and offers the same features. It is often used as the underlying database of web-based applications and sites.
  * ###### What is WordPress ? <a name="wiowpss"></a>
    * ###### WordPress is an open source content management system (CMS) based on PHP. It is used to create websites and blogs. It integrates with databases such as MySQL or MariaDB to store and serve content.
  * ###### What is the Relationship between MariaDB and WordPress ? <a name="witrbmawpss"></a>
    * ###### WordPress allows users to create and manage content. This content is stored in a database, usually powered by MariaDB or MySQL. WordPress needs a database to function and MariaDB or MySQL is usually preferred.
  * ###### Running MariaDB on Docker and WordPress Database Integration <a name="rmodawdin"></a>
    * ###### MariaDB can be run as a container in Docker. A MariaDB image can be created and run using Docker Compose or Docker CLI.
    * ###### WordPress is run as a separate container inside Docker, which can use the database by networking with the MariaDB container.
  * ###### Database Management and Configuration : <a name="dmacgon"></a>
    * ###### The necessary configurations for running MariaDB in Docker are made in Dockerfile or Docker Compose files. In these files, configurations such as database name, username, password are defined.
    * ###### Database management is usually done through SQL queries or interfaces. MariaDB's command line tool or graphical interfaces can be used.
  * ###### Database Security : <a name="dtbsscrty"></a>
    * ###### MariaDB's security is based on factors such as user authorization, password strengthening, network access control. The database can be protected with firewalls or authorization controls.
  * ###### Database Connectivity with Docker Compose : <a name="dcwdspse"></a>
    * ###### Docker Compose enables MariaDB and WordPress containers to run on the same network. In this way, the WordPress container can connect to the MariaDB container over the network and use the database.
  * ###### To Summarize :
    * ###### MariaDB is an open source RDBMS and is often used as the database for applications such as WordPress. Running MariaDB on Docker and its integration with WordPress can be done using Docker Compose or Docker CLI. Database management, security and configuration are typically configured in Docker files and supported by security applications. Docker Compose ensures that MariaDB and WordPress containers are on the same network so that WordPress can access the database. In this way, database and application installation can be performed seamlessly in a Docker environment.


#### What is Docker DNS Configuration and Domain Names ? <a name="widdnscadns"></a>
  * ###### Domain Routing and DNS Configuration <a name="dradnscn"></a>
    * ###### DNS (Domain Name System) is a system that translates domain names (domain names) on the internet into IP addresses. This translates domain names that humans can understand into IP addresses that computers can understand.
    * ###### The DNS configuration determines to which IP address a domain name is routed. This determines which IP address a website, a server or a service will connect to.
  * ###### Use and Importance of Domain Names <a name="uaiodns"></a>
    * ###### Domain names allow people to access resources on the internet. For example, a domain name such as www.example.com can be used to access a website.
    * ###### Domain names are easier to remember and more user-friendly than IP addresses. They are easier for people to keep in mind when accessing websites or services.
    * ###### Domain names also allow servers, services or Docker containers to communicate with each other. This ensures that different containers running on Docker networks can access each other by name.
    * ###### For example, IP addresses can be used to communicate between Docker containers. However, these IP addresses can change and can be complex. Instead, communication can be made easier by using domain names assigned to containers or services.
    * ###### These configurations enable containers running on Docker networks to communicate with each other or with the outside world.
  * ###### To Summarize :
    * ###### DNS configuration facilitates access to resources on the internet by allowing domain names to be directed to IP addresses. Domain names are more user-friendly than IP addresses and make it easier for people to access websites or services. Using domain names to communicate between Docker containers is a more flexible and straightforward method than IP addresses. In this way, services running in the Docker environment can communicate more easily with each other and with the outside world.



|[ ⬆︎  Up](#up)|
|      :-:     |
