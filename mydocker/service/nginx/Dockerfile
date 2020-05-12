##arg外部进行构建的传过来的参数eg:docker-compose build  --build-arg NGINX_VERSION=1.17-alpine nginx
##注意：1.一定要将参数放在镜像的前面，放在后面报错 2.定义的时候不能写成ARG 参数名 参数一定  参数名=参数,要和env进行区分
ARG NGINX_VERSION

FROM nginx:$NGINX_VERSION

##1.使用注意：ENV定义的时候不可以放在from的前面，否则会报错，
##2.使用的格式 ENV 参数名 参数值 或者 ENV 参数名=参数值


CMD ["sh","-c","echo $NGINX_VERSION"]
#CMD ["nginx","-g","daemon off;"]
