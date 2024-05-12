<!--![Microsoft logo](img/microsoft-white.png)<!-- .element style="height: 2.3em; border:none; margin: 0; background:none; box-shadow:none; align:top;" -->
# Going Hybrid with Red Hat and Azure

<!-- .slide: style="text-align:left;" data-background-image="img/microsoft-white.png" data-background-position="top left" data-background-size="436px" -->

Notes:

- Both RH and Azure have strength in the hybrid space
- lots of great tools to choose from.
- real risk of "the worst of all worlds"
- migration to 100% cloud doesn't exist
- So how do you do it?


## Who is this person?

Campbell Vertesi

Partner CTO for Red Hat

Microsoft

(life long open source contributor and fanatic)


## What do you want from hybrid?
<!-- .slide: data-auto-animate -->


## What do you want from hybrid?
<!-- .slide: data-auto-animate -->
- Cost savings
- CapEx vs OpEx
- Burst infra
- Cloud-specific capabilities

Notes:

- common reasons for adoption
- Make a plan with specific objectives - and make them verifiable
- Are your goals global (e.g. finance) or for specific workloads?
- which clouds? (cloud connectors for other hyperscalers)


 
## Shape of the journey
![Bifurcated journey](img/hybrid-shape.png)

Notes:

- This is a process over time.
- Separate teams for improving your hybrid environment itself (ie consolidating services) vs analyzing and running migrations
- moving OUs one at a time
- building your hybrid infrastructure one unit at a time
- for both: define your MVP and major stages of the journey.
- Don't wait for completion, these are long-running workstreams. Wait for steady progress.
- not botticelli's venus!


## Choosing your first workloads
<!-- .slide: data-auto-animate -->


## Choosing your first workloads
<!-- .slide: data-auto-animate -->
- chart OUs based on your desired benefits vs complexity
- hardest first, or easiest first?
- testability is key
 
Notes:

- chart OUs: tech complexity X benefit. 
- These are long-running workstreams. Need to be able to tell when we have steady success.
- Approximate timeline for migrations: average 94 days for 6000 nodes.
  - hardest work is in the business planning, which takes about 27 days


## Design your hybrid architecture
<!-- .slide: data-auto-animate -->

1. Build an Easy Migration Process
2. Build a single control plane
3. Profit!!!

Notes:

- Ultimate goal: easy, well defined migration paths to/from Azure, and seamless control plane. 


## Design your hybrid architecture
<!-- .slide: data-auto-animate -->

1. Build an Easy Migration Process
2. Build a single control plane
3. Profit!!!

\< /sarcasm \> 

Notes:

- Not as easy as it sounds
- control plane should start with "split brain" solutions. bare MVP is that you can handle it on-prem *and* on Azure, with separate processes/tools
  - decide your own MVP - some services MUST be unified up front in your business context 



## 1. "Easy" migration
<!-- .slide: data-auto-animate -->


1. "Easy" migration
<!-- .slide: data-auto-animate -->

![Laughing hysterically](img/hybrid-laughing.gif)

Notes:

- definition of "easy". 
- It's complicated no matter what but well-defined makes a big difference. (networking sucks)
- shared data store
- azure site recovery?
- AzMigrate
- RH Migration Toolkit
- 3rd party systems


## 1. "Easy" migration
<!-- .slide: data-auto-animate -->

- RH Migration Toolkit
- AzMigrate
- VMWare Hybrid Cloud Extension
- Redeployment (Ansible, Terraform...)
- Rsync

Notes:
- Some of the common approaches
- If your workloads are ephemeral this gets easier


## 2. Single control plane, single pane of glass
<!-- .slide: data-auto-animate -->

![In case of emergency break glass](img/emergency-break-glass.jpg)<!-- .element style="border:none; margin: 0; background:none; box-shadow:none; max-height:15em" -->

Notes:
- We hear "single pane of glass" often. More important is this kind of glass.
- SRE and emergency operations really need centralization. Other functions... it depends. 


## 2. Single control plane, single pane of glass
<!-- .slide: data-auto-animate -->

- **Monitoring + SRE**
- **Cost Forecasting**
- **Policy and Compliance**
- **Authentication/Authorization**
- **Security, Intrusion Detection**
- **Audit**
- **Backup / BCDR**
- **Config/Change Management**
- **Deployment**

Notes:
- A control plane is not a monolith and precise definitions vary
- These are major functions that I try to call out in planning
- This is a lot of functions. Unless you're using a tool that handles it all (openstack) you need to consider each one.


## 2. Single control plane, single pane of glass
<!-- .slide: data-auto-animate -->

- **Monitoring + SRE**: AzMonitor, Openshift Observability, Prometheus
- **Cost Forecasting**: AzCost Management, RH Insights, OpenCost
- **Policy and Compliance**: AzPolicy, RH Insights, Open Policy Agent
- **Authentication/Authorization**: AzActive Directory/Entra, RH Identity Management, Keycloak
- **Security, Intrusion Detection**: AzSecurity Center, RH Advanced Cluster Security for Kubernetes, Wazuh
- **Audit**: AzLog Analytics, RH Insights, ELK Stack
- **Backup / BCDR**: AzBackup, RH Data Protection, Bacula
- **Config/Change Management**: AzAutomation, RH Ansible Automation Platform, Puppet
- **Deployment**: AzDevOps pipelines, RH OpenShift, Jenkins

Notes:
- Example tools you might use
- Point of this slide: you have a ton of choice and it can be very granular
- Note that tool selection varies based on the nature of workloads and org needs.


##  Prioritize components to centralize

- cost analysis + forecasting
- security, IDS, policy/limitations
- audit
- config/change management

Notes:

- common priorities, but yours will be different
- these are the ones that either impact key benefits for you, or smooth the journey for your internal customers/users
- Anything that faces the workload teams is usually a priority, because it's their experience that determines adoption


## Centralize the rest over time

- monitoring + SRE
- backup / BCDR

Notes: 

- generally your centralized teams can be OK working with two different tools, e.g. for monitoring. Not ideal but OK.
- some services on the roadmap are OK to live with in "split brain mode" for your MVP phase.


##  Plan for eduction and process support

- Budget/Cost management
- Security and compliance
- Deployment, testing, infra patterns

Notes:

- Many paradigm shifts for workstreams and your stakeholders
- The humans are the hardest part of this and biggest point of failure


## Large-scale patterns

- "Openshift ALL THE THINGS" 
- "Azure ALL THE THINGS"
- Custom cloud (Openstack)
- Arc + Expressroute + your tools

Notes:
- openshift is a common pattern because it includes tooling for all the major functions
-  build towards neutral kubernetes, CNCI APIs and extensions
  - Arc control plane
  - Azure monitor (monitoring, cost forecasting)
  - Azure policy (policy and compliance)
  - Entra (Id/Auth)
  - Defender for cloud (security/IDS)
  - ARM, AzPolicy (config/change mgmt)
  - ASR (BCDR)



## Review

1. Plan and verify goals and priorities for workloads
2. Prioritize control plane one piece at a time
3. Patterns are your friend


## Thank you
