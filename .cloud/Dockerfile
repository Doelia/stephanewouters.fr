FROM node:20 as build_assets

WORKDIR /app

COPY . /app

RUN npm install
RUN npm run build

######################################################################

FROM php:8.3 as build_html

WORKDIR /app

COPY --from=build_assets /app/dist /app/dist
COPY pages pages
COPY build-php.sh build-php.sh

RUN sh ./build-php.sh

######################################################################

FROM nginx:latest

COPY --from=build_html /app/dist /usr/share/nginx/html

EXPOSE 80
