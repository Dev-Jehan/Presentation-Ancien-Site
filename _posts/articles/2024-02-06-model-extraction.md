---
layout: post
title: "Artificial Intelligence Model Extraction"
date: 2024-02-06 20:37:13 +0600
author: "Skyld Labs"
post_image: "/assets/images/blog/articles/Modelextraction.webp"
badge_color: "bg-perso"
categories: [ML security,article]
slider_post: true
---

<h4>What is a model and why do we care?</h4>
<p>Machine learning models are the results of highly complex computations and optimization over a massive amount of data. Data is the fuel of a machine learning algorithm. Due to privacy regulations, lack of sensors, or non-digitalization, it can be incredibly hard to gather. On the contrary, available data may be gigantic but requires a tremendous amount of cleaning and formatting before potential processing. All these steps make a machine learning model expensive to train and its accuracy will be positively impacted by the quality of your data. Simply put, the model is a result of both your data and your know-how and constitutes valuable intellectual property.</p>

<p>After being trained, the models are deployed in your applications for the inference step. The model can be either in a cloud or an edge device, such as a smartphone or a connected object. The model is a black box for the users: they send the input and observe the result but gain no knowledge about the internals of the model. </p>

<h4>What are the purposes of stealing a model?</h4>
<p>Attackers, however, will not be satisfied with a black box. They have multiple motivations to access your model’s architecture and weights.</p>

<p>First, it can be an act of industrial espionage and the objective is to steal your IP and acquire your know-how at a fraction of the cost. After all, training a highly accurate model is an expensive investment that can offer decisive competitive leverage and high benefits. The strategic importance of the model makes it an appealing target for attackers.</p>

<p>Second, if you are licensing your model or providing it behind an API, the motivation can be purely financial: attackers want to stop paying for the license or the API access while enjoying high-quality service. Protection will serve the same role as a DRM (Digital Rights Management), protecting your IP and your revenues.</p>

<p>Third, theft might only be the first step toward a more intricate attack, such as crafting adversarial examples or gaining information about your training data. With access to the model’s internals, attackers leave the black box setting to enter the white box setting, allowing them to easily perform those elaborate attacks. We will explore these attacks in next blogposts.</p>

<h4>How easy is it to steal your models ?</h4>


<p>As we mentioned earlier, models can be deployed either in a cloud or in an edge device.</p>

<p>In the case of cloud deployment, users access the models through a distant API. They send a request to the server, and the server returns a response. The model is running in an environment that is controlled by the company. This setting is often called MLaaS for Machine Learning as a service.</p>

<p>Of course, we reasonably suppose that different security measures are deployed around the cloud, reducing the risk of attackers accessing directly to the system. However, it is still possible for attackers to send a certain number of requests. By observing the responses, they can train their version of the model, which does not necessarily share the same weights and architecture but behaves consistently with the original model. In other words, they will obtain a model that may differ in its internal structure but still produces the same outputs given the same inputs. This attack has several benefits: it allows attackers to get an accurate model without having to gather a massive amount of training data. In addition, they can stop paying the access to the original model as their forgery provides the same level of service.</p>

<p>In the case of edge deployment, the attack is much easier. By edge, we mean that the model is embedded at the closest to the users. For example, it can be embedded in a smartphone application or a connected object, or it can be loaded in a browser to be executed directly on the user’s computer. As described in our previous article, this setting provides many benefits, such as enhanced privacy and reduced latency. However, the attacker controls the environment, allowing powerful reverse-engineering attacks. These attacks aim to extract the software’s implementation and assets, including the machine learning models. Attackers do not reconstruct a similar model to yours, they directly copy your models. Current software protection methods hinder those attacks at the cost of preventing the use of dedicated ML hardware, significantly degrading the performance of the algorithms. At Skyld, we develop a dedicated ML protection that can be run on any dedicated hardware, preserving your optimizations to deliver a top-quality service to your clients.</p>