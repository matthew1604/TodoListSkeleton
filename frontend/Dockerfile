FROM node:24-alpine

WORKDIR /app

# installer deps
COPY package*.json ./
RUN npm install

# copier le reste
COPY . .

EXPOSE 5173

CMD ["npm", "run", "dev", "--", "--host"]