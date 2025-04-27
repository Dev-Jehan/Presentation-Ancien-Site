---
layout: post
title: "New Deployments, New Threats: How To Protect Local AI Models From Reverse Engineering?"
date: 2024-09-16 11:17:13 +0600
author: "Marie Paindavoine"
post_image: "/assets/images/blog/articles/News deployment new threats.webp"
badge_color: "bg-perso"
categories: [ML security,article]
slider_post: true
---

<h4>Introduction: The Rise of Local AI</h4>

Deep Learning (DL) models have become a cornerstone of many software applications, powering features such as access control, health diagnostics, KYC (Know Your Customer), environmental analysis, and voice and sound recognition. Traditionally, these models were hosted on cloud servers, but a new trend has emerged: a local deployment closer to the data source. This deployment can be on existing devices like cars or smartphones, on dedicated hardware, or, of particular concern here, on on-premises servers. This shift promises faster response times, better user privacy, and reduced cloud infrastructure costs. However, it also introduces a major security challenge: **the threat of model theft and associated intellectual property.**

*As DL models become integral to application functionality, protecting them is crucial. In this article, we'll cover the basics of model reverse engineering methodologies and associated protection techniques.*

<h4>The Growing Threat of Model Theft</h4>

DL models represent significant investments for companies. These models are created using large datasets, require specialized expertise, and demand substantial computational resources for training. Data is often called the **"oil of the 21st century,"**, however, the models used to process them are also valuable. If these models are stolen, competitors can replicate an application's features without bearing the development costs, leading to significant financial losses and reducing the application's competitive edge.

Moreover, many DL models perform sensitive tasks, such as biometric authentication or malware detection. If malicious actors gains access to these models, they can conduct white-box adversarial attacks, potentially fooling the models more effectively. This makes securing these models in uncontrolled environments critically important.

Finally, if the model is intended for monetization, for example through licensing, protecting it is an effective technical measure to limit access to the model over time and/or to a restricted number of machines or individuals.

<h4>How to Reverse Engineer AI Models?</h4>

Before starting, it's essential to know how the DL model is deployed. There are generally two options: **models can be stored as files, or compiled into binaries specialized for the target hardware.**

The first possible attack is a static code analysis. After decompilation, using tools like **Ghidra** or **IDA**, an attacker will search for files with extensions such as **.onnx, .tflite, or .h5,** which are common formats for on-device AI models. Lists of these formats can be found using model viewers like **Netron** to automate the attack. It's also possible to refine the analysis by using magic numbers in file headers to confirm that the file is indeed a model, even if the name or extension has been changed. Once the model is identified, it can be extracted. The attacker can then run unauthorized copies of the software or even reuse the model in their application.

If the file's entropy is above a certain threshold, it's likely that the developer has encrypted the model. However, this can be bypassed using dynamic analysis. Debugging tools like gdb can be used to run the code and monitor framework functions that load models into memory before execution. Then, the function can be hooked, meaning a script is injected to modify the loading function's behavior and return the model in plain text. Tools like Frida can facilitate this process across various execution environments.

Code obfuscation makes these attacks more challenging by making the decompiled code harder to read and understand. This increases the time and effort required to extract a model. While this may protect the model's confidentiality against attackers with limited resources, it won’t prevent unauthorized reuse of the model.

<h4>How Developers Can Protect Their Models?</h4>

To protect DL models, developers need to implement more stringent security measures than just encryption or obfuscation, whether combined or not. There are at least two desirable properties for an AI model in terms of security:

- **Model Confidentiality:** Depending on the case—whether the model is fine-tuned from an open-source architecture or an innovative one—this could mean confidentiality of the model’s parameters (weights and biases) or the model's architecture (layer types, layer sequence). Model confidentiality must withstand both static and dynamic attacks as described earlier.

- **License Enforcement:** This involves having a technical solution to enforce the model's usage terms and prevent unauthorized reuse. This could involve time-limited access or restrictions on the number of devices on which the model can be deployed.

In ShadowNet: [ShadowNet: A Secure and Efficient On-device Model Inference System for Convolutional Neural Networks (computer.org)](https://www.computer.org/csdl/proceedings-article/sp/2023/933600b489/1OXH83c7EYM) , the authors propose mathematical modifications to models to ensure weight transformation. This protection is valid both at rest and during execution since all calculations are performed on modified weights or within secure enclaves. No clear weights are sent to unsecured memory.

Other papers,s such as [[2306.06112] ModelObfuscator: Obfuscating Model Information to Protect Deployed ML-based Systems (arxiv.org)](https://arxiv.org/abs/2306.06112) suggest solutions based on custom machine learning frameworks for each model to protect the model's architecture.

These academic solutions still face significant deployment challenges, either due to the need to control the hardware on which the algorithm is deployed or because they create a dependency on a modified framework that might not receive updates from the main framework.

<h4>Conclusion: The Future of Model Security</h4>

As the trend of on-device inference grows, risks will only increase. In this context, Skyld, a spin-off of Inria and based at Station F, offers a solution that protects models at rest, during execution, and without relying on hardware. This solution is based on mathematical transformations of the model to preserve weight confidentiality.

*Finding a solution that preserves both weight and architecture confidentiality without altering the machine learning framework remains an open problem, presenting an exciting challenge for cybersecurity researchers.*
