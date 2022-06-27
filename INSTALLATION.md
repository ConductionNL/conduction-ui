# Installation
This document dives a little deeper into installing your component on a Kubernetes cluster, looking for information on setting up your component on a local machine? Take a look at the [tutorial](TUTORIAL.md) instead. 

For installation of components, you will have to have [helm 3](https://helm.sh) and [kubectl](https://kubernetes.io/docs/tasks/tools/install-kubectl/) installed.

## Minimal system requirements for your cluster
- Kubernetes 1.16 or later
- A minimum 3 nodes
- 4 vCPUs per node
- 4 GB RAM per node
- 50 GB disk space per node

## Kubernetes Providers
Several Kubernetes providers are suitable to run Common Ground components. Most notable are:

- [Digital Ocean](https://digitalocean.com)
- [Google Cloud](https://cloud.google.com)
- [Amazon Web Services](https://aws.amazon.com)

These are accepted providers following the court ruling of the EU for production environments.

## Deploying through commonground.nu

We strongly advise using [CommonGround.nu](https://commonground.nu) to deploy your components. You can find an extensive tutorial [here]().

If you want to use CommonGround.nu, follow the following tutorial. Otherwise, we strongly encourage you to read the chapter about [helm settings](INSTALLATION.md#Helm-settings)

## Setting up helm repositories

Adding the [Ingress NGINX](https://kubernetes.github.io/ingress-nginx/) repository of Helm and Kubernetes to your Helm repositories is done with  the following command:
```CLI
$ helm repo list
```

If there is no repository 'ingress-nginx' in the output, we need to add it:

```CLI
$ helm repo add stable https://kubernetes.github.io/ingress-nginx
```

Congratulations! You added your first repository to Helm.

## Setting up Ingress
We need at least one NGINX controller per Kubernetes cluster. Optionally, we could set one up per `namebase`/

```CLI
$ Helm install ingress-nginx/ingress-nginx --name loadbalancer --kubeconfig kubeconfig.yaml
```

After installing a component, we can check that out with 

```CLI
$ kubectl describe ingress pc-dev-ingress -n=kube-system --kubeconfig kubeconfig.yaml
```

## Setting up Kubernetes Dashboard
After installing Helm, we can easily use both to install the Kubernetes dashboard

```CLI
$ kubectl create -f https://raw.githubusercontent.com/kubernetes/dashboard/v2.0.0/aio/deploy/recommended.yaml --kubeconfig kubeconfig.yaml
```

This command should return a token, store it somewhere save (just the token) and start up a dashboard connection

```CLI
$ kubectl proxy --kubeconfig kubeconfig.yaml
```

This command proxies our dashboard to Helm, making it available through our browser and localhost:

```CLI
http://localhost:8001/api/v1/namespaces/kube-system/services/https:dashboard-kubernetes-dashboard:https/proxy/#!/login
```

You can log in using the Kubeconfig option and upload your `kubeconfig`.

## Deploying through Helm

First, we update our dependencies

```CLI
$ helm dependency update ./api/helm
```
Then we  set up the desired namespaces

```CLI
$ kubectl create namespace dev
$ kubectl create namespace stag
$ kubectl create namespace prod
```

To create a new instance:

```CLI
$ helm install pc-dev ./api/helm  --kubeconfig kubeconfig.yaml --namespace dev  --set settings.env=dev,settings.debug=1
$ helm install pc-stag ./api/helm --kubeconfig kubeconfig.yaml --namespace stag --set settings.env=stag,settings.debug=0,settings.cache=1
$ helm install pc-prod ./api/helm --kubeconfig kubeconfig.yaml --namespace prod --set settings.env=prod,settings.debug=0,settings.cache=1
```
This will create an instance with the name of pc-dev (line 1) pc-stag (line 2) or pc-prod (line 3) on your cluster, with the environment, debug, and cache settings configured (see [Helm settings](INSTALLATION.md#helm-settings) for more information). 

If you want to update an existing one

```CLI
$ helm upgrade pc-dev ./api/helm  --kubeconfig kubeconfig.yaml --namespace dev  --set settings.env=dev,settings.debug=1
$ helm upgrade pc-stag ./api/helm --kubeconfig kubeconfig.yaml --namespace stag --set settings.env=stag,settings.debug=0,settings.cache=1
$ helm upgrade pc-prod ./api/helm --kubeconfig kubeconfig.yaml --namespace prod --set settings.env=prod,settings.debug=0,settings.cache=1
```

Or restart the containers of the component

```CLI
$ kubectl rollout restart deployments/pc-php --namespace dev --kubeconfig kubeconfig.yaml
$ kubectl rollout restart deployments/pc-nginx --namespace dev --kubeconfig kubeconfig.yaml
$ kubectl rollout restart deployments/pc-varnish --namespace dev --kubeconfig kubeconfig.yaml
``` 

If you want to delete an existing one
```CLI
$ Helm del pc-dev --kubeconfig kubeconfig.yaml
$ Helm del pc-stag --kubeconfig kubeconfig.yaml
$ Helm del pc-prod --kubeconfig kubeconfig.yaml
```

Note that you can replace Common Ground with the namespace you want to use (usually the name of your component).

## Helm settings
When installing components, you can edit several settings to modify the working of your component. The most important of these settings are:

- ```settings.env```: This setting primarily influences the container to be used. There are three regular possibilities: ```dev```, ```stag``` and ```prod```. 

   - ```dev``` will load the latest new container, which can be unstable because this is the developed version.

   - ```stag``` will load the latest semi-stable version of the container. This setting is recommended for acceptation environments

   - ```prod``` will load the ```latest``` images, which are the latest stable version. Recommended for production environments.
 
- ```settings.debug```: This setting can enable the extensive debugging tools in Symfony. Recommended in development environments by setting it to 1. However, debugging takes a lot of power from your cluster, so we recommend switching it off in production or acceptation environments (by setting it to 0)

- ```settings.cache```: This setting can enable caching in your component. However, this also means that a resource version can be loaded that has been changed on the source. Therefore we recommend switching this off in development environments (by setting this option to 0) and enabling it (by setting this option to 1) in production environments to enhance the response times of the component.

- ```settings.web```: This setting determines if the component has to be exposed to the outside world. Setting it to 0 will not expose your component outside of the cluster (recommended). Switching it to 1 will expose your component to Ingress (recommended for front-end applications).

## Making your app known on NLX
The proto component comes with a default NLX setup. However, if you made your component, you might want to provide it through the [NLX](https://www.nlx.io/) service. Fortunately, the proto component comes with a nice setup for NLX integration.

First, change the necessary lines in the [.env](.env) file, basically everything under the NLX setup tag. Remember that you will need to have your component available on a (sub)domain name (a simple IP won't suffice).

To force the regeneration of certificates, simply delete the `org.crt` en `org.key` in the `api/nlx-setup` folder.


## Setting up analytics and a help chat function

If you are interested to know how your application documentation is used. You can see which parts of your documentation are most read and which might need additional love with (and other user interactions) Google tag manager. Add your Google tag id to the `.env` file (replacing the default) under GOOGLE_TAG_MANAGER_ID. This setting will only enable Google analytics on your documentation page. It will never analyze the actual traffic of the API.

Have you seen our sweet support chat on the documentation page? We didn't build that ourselves ;). We use a Hubspot chat for that. Head over to Hubspot, create an account, and enter your Hubspot embed code in the `.env` file (replacing the default) under HUBSPOT_EMBED_CODE.

Would you like to use different analytics or chat tool? Just shoot us a [feature request](https://github.com/ConductionNL/commonground-component/issues/new?assignees=&labels=&template=feature_request.md&title=New%20Analytics%20or%20Chat%20provider)!  
