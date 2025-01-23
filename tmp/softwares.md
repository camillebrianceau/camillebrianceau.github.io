

# clinica
Clinica is a software platform for multimodal brain image analysis in clinical research studies. It makes it easy to apply advanced analysis tools to large scale clinical studies. For that purpose it integrates a comprehensive set of processing tools for the main neuroimaging modalities: currently MRI (anatomical functional diffusion) and PET in the future EEG/MEG.\nFor each modality Clinica allows to easily extract various types of features (regional measures parametric maps surfaces curves networks). Such features are then subsequently used as input of machine learning statistical modeling morphometry or network analysis methods


# references

Routier et al OHBM 2018
- A. Routier N. Burgos M. Díaz M. Bacci S. Bottani O. El Rifai S. Fontanella P. Gori J. Guillon A. Guyot R. Hassanaly T. Jacquemont P. Lu A. Marcoux T. Moreau J. Samper-González M. Teichmann. E. Thibeau-Sutre G. Vaillant J. Wen A. Wild M.-O. Habert S. Durrleman O. Colliot – Clinica: an open source software platform for reproducible clinical neuroscience studies Frontiers in Neuroinformatics 2021. PDF Paper in PDF
- Wen J Thibeau-Sutre E Samper-González J Routier A Bottani S Durrleman S Burgos N Colliot O: Convolutional Neural Networks for Classification of Alzheimer’s Disease: Overview and Reproducible Evaluation Medical Image Analysis 63: 101694 2020 PDF Paper in PDF
- Routier A Marcoux A Diaz Melo M Samper-González J Wild A Guyot A Wen J Thibeau- Sutre E Bottani S Durrleman S Burgos N Colliot O: New Longitudinal and Deep Learning Pipelines in the Clinica Software Platform OHBM 2020. PDF Paper in PDF
- Samper-González J Burgos N Bottani S Fontanella S Lu P Marcoux A Routier A Guillon J Bacci M Wen J Bertrand A Bertin H Habert MO Durrleman S Evgeniou T Colliot O. Reproducible evaluation of classification methods in h Alzheimers disease: Framework and application to MRI and PET data Neuroimage 183: 504–521 2018. PDF Paper in PDF
- Marcoux A Burgos N Bertrand A Teichmann M Routier A Wen J Samper-González J Bottani S Durrleman S Habert M-O Colliot O: An Automated Pipeline for the Analysis of PET Data on the Cortical Surface Frontiers in Neuroinformatics 12 2018. PDF Paper in PDF

http://www.clinica.run
https://github.com/aramis-lab/clinica
mailto:olivier.colliot(a)inria(dot)fr


# clinicadl

ClinicaDL is an open-source deep learning software for reproducible neuroimaging processing. This library was developed from the AD-DL project. The combination of ClinicaDL and Clinica allows performing an end-to-end neuroimaging analysis from the download of raw data sets to the interpretation of trained networks including neuroimaging preprocessing quality check label definition architecture search and network training and evaluation.\r\nWe implemented ClinicaDL to bring answers to three common issues encountered by deep learning users who are not always familiar with neuroimaging data: (1) the format and preprocessing of neuroimaging data sets (2) the contamination of the evaluation procedure by data leakage and (3) a lack of reproducibility.

# ref
- Elina Thibeau-Sutre Mauricio Diaz Ravi Hassanaly Alexandre Routier Didier Dormont Olivier Colliot Ninon Burgos: ClinicaDL: an open-source deep learning software for reproducible neuroimaging processing HAL Preprint 2021. PDF Paper in PDF

https://clinicadl.readthedocs.io/en/stable/
https://github.com/aramis-lab/clinicaDL
mailto:ninon.burgos(at)inria(dot)fr


# deformetrica
Deformetrica is a software for the statistical analysis of 2D and 3D shape data. It essentially computes deformations of the 2D or 3D ambient space which in turn warp any object embedded in this space whether this object is a curve a surface a structured or unstructured set of points or any combination of them.\nReferences\n


# ref
S. Durrleman et al. Morphometry of anatomical shape complexes with dense deformations and sparse parameters. NeuroImage. 101(1): 35-49 2014Link to paper

http://www.deformetrica.org/
stanley.durrleman(a)inria(dot)fr

Bône A. Louis M. Martin B. & Durrleman S. Deformetrica 4: an open-source software for statistical shape analysis. In nternational Workshop on Shape in Medical Imaging Springer Cham 2018. p. 3-13. PDF Paper in PDF

# brain network toolbox

A list of MATLAB routines for characterizing brain network topology though graph theoretical indices can be found at the website of the FreeBorN consortium which promotes the interaction and visibility of the research teams studying brain connectivity and network theory.

#References

https://sites.google.com/site/fr2eborn/download
fabrizio.devicofallani(a)gmail(dot)com,mario.chavez(at)upmc(dot)fr

# leaspy 

Leaspy is a software package for the statistical analysis of longitudinal data particularly medical data that comes in a form of repeated observations of patients at different time-points. Considering these series of short-term data the software aims at :
- recombining them to reconstruct the long-term spatio-temporal trajectory of evolution
- positioning each patient observations relatively to the group-average timeline in term of both temporal differences (time shift and acceleration factor) and spatial differences (different sequences of events spatial pattern of progression ...)
- quantifying impact of cofactors (gender genetic mutation environmental factors ...) on the evolution of the signal
- imputing missing values
- predicting future observations
- simulating virtual patients to un-bias the initial cohort or mimics its characteristics

# ref
- I. Koval A. Bone M. Louis S. Bottani A. Marcoux J. Samper-Gonzalez N. Burgos B. Charlier A. Bertrand S. Epelbaum O. Colliot S. Allassonniere & S. Durrleman Intensive application for h Alzheimers Disease progression: AD Course Map charts h Alzheimers disease progression Scientific Reports, 2021. PDF Paper in PDF
- Schiratti J-B Allassonniere S Colliot O Durrleman S.A Bayesian mixed-efects model to learn trajectories of changes from repeated manifold-valued observations. In Journal of Machine Learning Research (JMLR) 18(1) 4840-4872. 2017. PDF Paper in PDF
- Koval I Schiratti JB Routier A Bacci M Colliot M Allassonnière S Durrleman S. Spatiotemporal propagation of the cortical atrophy: population and individual patterns. In Frontiers in Neurology 9 2018. PDF Paper in PDF

https://disease-progression-modelling.github.io/pages/models/disease_course_mapping.html
https://gitlab.icm-institute.org/aramislab/leasp

stanley.durrleman(at)inria(dot)fr