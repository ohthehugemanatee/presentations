## APS EMEA FY20 Strategy
### June 19-21 2019
<style>.slideshow--slide { height: 6em; }</style>
<div style="display:flex; flex-direction: row; justify-content: center; flex-wrap: wrap; height: 9em; image-orientation: from-image;">
  <div class="slideshow--slide">
  ![Whiteboard 1](img/aps-whiteboard-1.jpg)<!-- .element style="border:none; margin: 0; background:none; box-shadow:none" -->
  </div>
  <div class="slideshow--slide">
  ![Whiteboard 2](img/aps-whiteboard-2.jpg)<!-- .element style="border:none; margin: 0;background:none; box-shadow:none" -->
  </div>
  <div class="slideshow--slide">
  ![Whiteboard 3](img/aps-whiteboard-3.jpg)<!-- .element style="border:none;margin: 0; background:none; box-shadow:none" -->
  </div>
  <div class="slideshow--slide">
  ![Whiteboard 4](img/aps-whiteboard-4.jpg)<!-- .element style="border:none;margin: 0; background:none; box-shadow:none" -->
  </div>
  <div class="slideshow--slide">
  ![Whiteboard 5](img/aps-whiteboard-5.jpg)<!-- .element style="border:none;margin: 0; background:none; box-shadow:none" -->
  </div>
</div>


## Agenda

* Defining the Domain
* Our business impact
* Patterns from FY19
* Our FY20 stance

Notes:
This is the meeting agenda from our session. 
* Note that we intentionally took an EMEA centric view here. 
* Some of our outcomes may be different from other regions. eg no Walmart project



## Defining the Domain

* Which technical areas and technologies are critical for us?
* What business value to we bring?
* With which other Tech Domains do we best align?


### Defining the Domain
## Critical areas and technologies

<div style="display:flex; flex-direction: row;">
  <div style="display:flex; flex-direction: column;">
    <p>Specific</p>
    <div style="flex-grow:5; background-image: linear-gradient(green, blue); min-height: 200px;"></div>
    <p stye="align-self: flex-end;">Fundamental</p>
  </div>
  <div style="flex-grow:1;">
  ![Specific](img/crit_areas_specific.png)<!-- .element style="border:none; margin: 0; background:none; box-shadow:none" -->
  ![Fundamental](img/crit_areas_mid.png)<!-- .element style="border:none; margin: 0;background:none; box-shadow:none" -->
  ![Fundamental](img/crit_areas_fundamental.png)<!-- .element style="border:none;margin: 0; background:none; box-shadow:none" -->
  </div>
</div>

Notes:
* We boiled our most common technologies down into broader knowledge areas
* Bottom: fundamental concepts with which every APS SE should be comfortable.
  * eg. it's hard to succeed in APS without networking principles.
  * Useful in defining hiring profiles
* Top: specific technologies we see in play. Not exhaustive.
* Middle is potentially the most useful to us: technical areas that have direct customer benefit. These will map into the customer benefits later.


### Defining the Domain
## Partner tech domains
# 74%
of engagements were partnered with at least one another domain

Notes:
* As you can tell from the previous, a lot of those examples cross into other domains, particularly DevOps and DAP. We see that in the AzDO data, too.


### Defining the Domain
## Partner tech domains

* DevOps 
* DAP 
* ML/Data 

Notes: These are the tech domains with which we overlap the most, roughly in order of frequency.
* We should seek to partner closely with these domains in Share/Learn, to maximize our collaboration in Build.



## Business impact

* Cost Saving
* Agility
* Security
* Portability
* Standardization


### Business impact
## Cost savings

* Optimizing resource utilization / doing more with less
* Freeing up your tech staff for meaningful work

Notes:
eg
* Cluster consolidation
* Multi-tenancy
* Auto-scaling
* Disposable infrastructure
* No more babysitting!


### Business impact
## Agility

* Shortening time to production
* Reducing errors in deployment
* Accelerating developer feedback

Notes:
* CI/CD and automated testing
* Infra as code
* Containerization


### Business impact
## Security

* Centralizing security policy away from the app into the platform
* Making implicit security policy *explicit*, *transparent*, and *centrally maintained*.

Notes:
* Service mesh
* Az Policy
* Network Architecture
* ID Management
* DevSecOps
* Image scanning


### Business impact
## Portability

* Implementing *open standards* supported by many vendors
* Making process independent from application and platform.

Notes:
* Kubernetes, containers
* SMI
* NGINX
* Terraform


### Business impact
## Standardization

* Consistent developer tooling and environment
* Automating complex tasks out of your app

Notes: 
Covered by the previous



## Patterns from FY19

* Engagement techs
* Customer techs
* Tech bets

Notes: 
We walked through all of our engagements from FY19 looking for patterns we could learn from.


## Patterns from FY19
### Engagement techs

![Engagement Techs](img/aps-wordcloud.png)<!-- .element style="border:none; margin: 0; background:none; box-shadow:none" -->

Notes:
* Word cloud of the techs and concepts from those engagements, sized by frequency. It's pretty clear to see some of the focus ideas and techs
* AKS, Helm, Terraform, and AzDO are top of the list
* ARM came up in lots of engagements which we think were too shallow or not adequately filtered. 


## Patterns from FY19
### Customer techs

* Java (Spring, Tomcat)
* PHP Web application stack
* AWS k8s
* Prometheus/Grafana
* .NET
* Windows
* Jenkins/Travis/GitLab

Notes:
* technologies in use by the customer. We don't need to be experts here, but familiarity with build environments and typical tooling is important.
* The exception is DevOps. AzDO is not a strong leader here, we need to be able to work confidently in the market leading systems.


## Patterns from FY19
### Tech Bets for FY20

<div style="display:flex; flex-direction: row; flex-wrap: wrap;">
  <div>
    <ul>
      <li>Terraform</li>
      <li>Ansible</li>
      <li>Golang</li>
      <li>GitOps (Bedrock)</li>
      <li>Kubeflow</li>
      <li>AzDO</li>
    </ul>
  </div>
  <div>
    <ul>
      <li>Helm 3</li>
      <li>Service Mesh Interface</li>
      <li>Multi-cloud</li>
      <li>Windows Containers</li>
      <li>High Scale</li>
      <li>AKS Engine</li>
    </ul>
  </div>
</div>

Notes:
* Based on 
  * our projects from FY19
  * EEST strategic techs
  * Recently released Azure capabilities
  * Heavily promoted capabilities
* These are areas we should invest in for FY20, making sure we have expertise available in as many of these areas as possible.
* This is a lot of ground to cover, way too much for 4 people. We are picking individual focus/priority areas.



## Our FY20 Stance

* Docs to communicate/drive business value
* Core technologies
* Tech "bet" learning focus
* Partner domains


### Our FY20 Stance
## Docs to communicate/drive business value

* Influence SE/I and other roles with clear statements of business value
* "Package deals" of common problem areas to encourage re-use of durable assets
* Link engagement assets with these business cases, eg "How APS brought better app security to ING"

Notes: 
* Campbell will collect those statements of business value into a document, something like "Customer benefits overview: APS"
* As we discover common patterns, we will not only make a re-usable asset... but a re-usable business case, too.
* Engagement reports will feature the appropriate business case prominently, to better communicate our impact


### Our FY20 Stance
## Core technologies

* AKS
* Helm
* Terraform
* Blackrock
* AzDO
* Istio

Notes:
* Better understanding of our core technologies, which should be primary focus areas for all of us in the domain. 


### Our FY20 Stance
## Tech "bet" learning focus

* Stuart: Monitoring, Operators 
* Julien: Terraform, Security/ServiceMesh 
* Cesar: Microservices (in Golang) 
* Alessandro: Golang 
* Campbell: Infra as code, Operators 

Notes:
* not hard rules, rather areas of interest. We'll review and revise as we go.


### Our FY20 Stance
## Partner domains

* DevOps
* Dev App Plat
* ML/Data

Notes:
* Based on FY19 data, Campbell will proactively reach out to managers in these areas.
* Try to share learning as we go
* Make sure it's clear we're ready to join in mixed engagements!



## Happy FY20!

Slides:

<i class="fab fa-github"></i> github.com/ohthehugemanatee/presentations
