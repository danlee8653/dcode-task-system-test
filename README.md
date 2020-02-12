## Usage

Make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system.

Navigate to the `/src` folder and run the following:

- `composer install`
- `npm install`
- `npm run dev`

Then root directory run the following:

- `docker-compose build`
- `docker-compose up -d`

Open up your browser of choice to [http://localhost:8080](http://localhost:8080) and you should see your Laravel app running as intended. 

Containers created and their ports are as follows:

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`