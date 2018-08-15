ARG ES_VERSION=6.3.2

FROM docker.elastic.co/elasticsearch/elasticsearch:${ES_VERSION}

LABEL maintainer="Johnson <2534426042@qq.com>"

RUN /usr/share/elasticsearch/bin/elasticsearch-plugin install -b https://github.com/medcl/elasticsearch-analysis-ik/releases/download/v6.3.2/elasticsearch-analysis-ik-6.3.2.zip \
    && sed -i 's!<entry key="ext_dict"></entry>!<entry key="ext_dict">custom/mydict.dic</entry>!g' /usr/share/elasticsearch/config/analysis-ik/IKAnalyzer.cfg.xml

VOLUME /usr/share/elasticsearch/config/analysis-ik

EXPOSE 9200