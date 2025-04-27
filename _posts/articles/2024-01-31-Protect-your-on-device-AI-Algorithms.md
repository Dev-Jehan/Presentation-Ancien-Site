---
layout: post
title: "Protect Your On-Device Artificial Intelligence Algorithms: Encryption Is Not Enough!"
author: "Skyld Labs"
date: "2024-01-31" 
post_image: "/assets/images/blog/articles/protect_on_device_AI.webp"
badge_color: "bg-perso"
categories: [ML security,article]
slider_post: true
---

<i>On-Device Artificial Intelligence (AI) is an invaluable asset to many industries, offering revolutionary capabilities in analysis and prediction. However, with this technological revolution comes a concern: the security of AI models. Companies invest heavily in the research and development of their algorithms, but how can their protection against prying eyes and reverse-engineering be ensured? In this article, we will delve into what is needed to ensure a full protection, and how SKYLD’s SDK can be your ally in implementing this essential protection.</i>

<h4>Understanding how Model Reverse Engineering Works</h4>

<p>A model is stored in a file that will be excuted by the ML framework (eg, TensorFLow). Encryption of this file is a popular strategy to protect the parameters and intellectual property. However, when you model is deployed on-device, the attacker can perform dynamic reverse engineering. They stop the execution at the exact time when the model is decrypted and load into the memory to be executed.</p>

<h4>Why Should I Protect On-Device AI Algorithms?</h4>

<ul>
<li>
<b>Intellectual Property and Competitive Edge Protection:</b><p>Model extraction attacks pose a risk of intellectual property theft, allowing competitors or malicious actors to replicate the original model’s value. Attackers can also fine-tune your model with just a fraction of the necessary data to train a competitive algorithm. Protecting your investments is crucial for maintaining a competitive edge.</p>
</li>
<li>
<b>Security and Trustworthiness:</b><p>A compromised model can have serious consequences, especially in applications where security is paramount, such as in finance, healthcare, or critical infrastructure. If attackers can extract a model, they may perform powerful white-box adversarial attacks, creating data that will deceive the model, and evade classification or detection.</p>
</li>
<li>
<b>Data Privacy and Compliance:</b><p>When machine learning models are trained on sensitive data, extracting the model may reveal information about the training data. A competitor may also gain insights on how the training set is built, and even recover part of your training data.</p>
</li>
</ul>

<img src="/assets/images/blog/articles/protect_on_device_AI_1.webp" width="960" height="540">
<i>Example of model extraction attacks</i>

<h4>How Can You Protect On-Device AI Models?</h4>
<p>Crafting a protection for on-device AI models must take into account the specifities of artificial intelligence algorithms. Encryption of the weights file is not enought, as it will be decrypted during runtime. Obfuscation will not protect the parameters, but will only increase the difficulty to access the file</p>
<p>You need to design a protection that will protect the weights during runtime.</p>

<h4>How Skyld Can Assist You?</h4>
<p><i>SKYLD offers a specialized development kit for on-device AI model protection. Our kit seamlessly integrates into your existing development pipelines, minimizing disruptions. Additionally, with our advanced technology, your AI models will be safeguarded against even the most sophisticated attacks.</i></p>
<p><i>To learn more about our development kit and how it can enhance the security of your AI models, feel free to contact us today. Protect your competitive edge and unlock the power of on-device Artificial Intelligence.</i></p>
