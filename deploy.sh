#!/usr/bin/env bash

# Get deployment environment
echo "Please provide the environment:"
select ENV in "dev" "prod" "cancel"; do
    case $ENV in
        dev ) ENV="dev"; break;;
        prod ) ENV="prod"; break;;
        cancel ) exit;;
    esac
done

# Copy .env.(env) to .env for docker-compose
echo "Building ${ENV} image..."
echo "Copying environment file to .env"
env_file=".env.${ENV}"
if test -f "$env_file"; then
    cp "$env_file" .env
else
    echo "Env file $env_file does not exist. Stopping build!"
    exist 1;
fi

# Start building the image
echo "Start building the image for ${ENV} ..."
compose_files=(-f docker-compose.yml)
if [ "$ENV" == "prod" ]; then
  compose_files+=(-f production.yml)
else
  compose_files+=(-f development.yml)
fi
echo "Executing docker-compose ${compose_files[*]} build --no-cache --force-rm"
docker-compose "${compose_files[@]}" build --no-cache --force-rm

if $? neq 0; then
  echo "Building image failed. Exiting ..."
  exit 1;
fi
echo "Done building image. Running containers up."
echo "Executing docker-compose ${compose_files[*]} up -d"
docker-compose "${compose_files[@]}" up -d