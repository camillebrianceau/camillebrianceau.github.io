# Aramis Lab 
The Aramis Lab brings methodological researchers (computer scientists applied mathematics) and medical experts (neurology medical imaging) to build numedical models of brain diseases from multimodal patient data: medical imaging clinical data and genomic data.

    It is a joint research team between CNRS, Inria, Inserm and Sorbonne University and belong to the Brain and Spinal cord Institute (ICM) which is a recently created neuroscience center based in the Pitié-Salpêtrière hospital in Paris the largest adult hospital in Europe.

The team develops new data representations and statistical learning approaches that can integrate multiple types of data acquired in the living patient including medical imaging clinical and genomic data. In turn these models shall allow for a better understanding of disease progression and the development of new decision support systems for diagnosis prognosis and design of clinical trials.

The pluridisciplinary team is located at the Brain and Spine Institute (ICM) which is a recently created neuroscience center based in the Pitié-Salpêtrière hospital in Paris the largest adult hospital in Europe and has a long tradition of neuroscience and neurology. This ecosystem along with enduring collaborations with clinical teams of the ICM and the hospital allows to develop new data representations and statistical learning approaches that can integrate multiple types of data acquired in the living patient including medical imaging clinical and genomic data. In turn these models will allow for a better understanding of disease progression and the development of new decision support systems for diagnosis prognosis and design of clinical trials.

## key metodological domains 
### Machine Learning
Statistical techniques empowered by computers that learn regularities in data to better alleviate similarities or differences 
### Medical image processing
### Morphometry and shape analysis
### Complex network theory
### Graph analysis
### Longitudinal analysis


## main applications
### Alzheimers disease
Neurodegenerative disease affecting primarly the cognitive capabilities of more than 30 million people over the world
### Fronto-temporal dementia
### Multiple sclerosis
### Parkinsons disease
### Brain computer interfaces



## Context and general aim
The tremendous progress of neuroimaging genomic and biomarker technologies has allowed to capture various characteristics of brain diseases in living patients. Collection of multimodal data in large patient databases provides a comprehensive view of brain alterations biological processes genetic risk factors and symptoms. The team aims to build numerical models of brain diseases from multimodal patient based on appropriate data-driven approaches. To this end we develop new data representations and statistical learning approaches that can integrate multiple types of data: neuroimaging peripheral biomarkers clinical and omics data (genetics transcriptomics).

In particular we develop methods to highlight networks of interactions among multiple sources of data to track data changes during disease progression and to automatically predict current or future clinical outcomes from these data. We apply these models to neurodegenerative diseases (h Alzheimers disease and other dementias Multiple Sclerosis Parkinsons disease...). They shall allow to deepen our understanding of neurological diseases and to develop new decision support systems for diagnosis prognosis and design of clinical trials.


## New representations from multimodal medical images
\Combining multiple neuroimaging modalities is necessary to obtain a comprehensive picture of alterations in brain diseases (atrophy anatomical disconnections functional connectivity alterations metabolic alterations abnormal protein deposits…). Such a combination is a non-trivial task because different types of information are conveyed by the different modalities which in turns leads to different natural data representations (meshes and curves for geometrical information signals networks). We propose to build new integrated data representations from multiple modalities. Such representations will be subsequently entered into statistical models and decision support systems. Specifically we will introduce representations that can integrate geometrical information (anatomical surfaces extracted from anatomical MRI white matter tracts extracted from diffusion MRI) together with functional (PET ASL EEG/MEG) and microstructural information.

## Network theoretic approaches to integrate heterogeneous brain networks
The complexity of biological systems often emerges from interactions between components at multiple spatial and temporal scales. Neglecting this information and analyzing separately the levels of such scales is an oversimplification of the real phenomenon. We propose a methodological framework that aims on the one hand to integrate information from networks describing different modes of connectivity (e.g. multi-modal cross-frequency) and on the other hand to statistically model the organizational mechanisms of temporally dynamic networks (e.g. nonstationary longitudinal). Target applications include: i) human learning in brain-computer interface ii) prediction of neurodegenerative disease progression and iii) identification of driving nodes in biological pathways (gene expression networks).
Ref: 
- Network neuroscience for optimizing brain-computer interfaces. De Vico Fallani et al. 2018. (Paper)[https://arxiv.org/pdf/1807.05616.pdf]
- A Topological Criterion for Filtering Information in Complex Brain Networks. De Vico Fallani et al. 2017. (Paper)[https://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1005305]
- Graph analysis of functional brain networks: practical issues in translational neuroscience. De Vico Fallani. 2014. (Paper)[http://rstb.royalsocietypublishing.org/content/369/1653/20130521.short]

## Spatio-temporal models to build trajectories of disease progression from longitudinal data
Longitudinal data sets are collected to capture variable temporal phenomena which may be due to ageing or disease progression for instance. They consist in the observation of several individuals each of them being observed at multiple points in time. The statistical exploitation of such data sets is notably difficult since data of each individual follow a different trajectory of changes and at its own pace. This difficulty is further increased if observations take the form of structured data like images or measurements distributed at the nodes of a mesh and if the measurements themselves are normalized data or positive definite matrices for which usual linear operations are not defined. Our team has contributed to the definition of a generic theoretical and algorithmic framework for learning typical trajectories from longitudinal data sets. This framework is built on tools from the Riemannian geometry to describe trajectories of changes for any kind of data and their variability within a group both in terms of the direction of the trajectories and the pace at which trajectories are followed. The inference is based on a stochastic Expectation Maximization (EM) algorithm coupled with Markov Chain Monte Carlo methods.

## Decision support systems for diagnosis prognosis and design of clinical trials
Based on the new representations and statistical models we design decision support systems for diagnosis prognosis and design of clinical trials. These systems are based on: i) personalization of statistical models to predict evolution at the patient level; ii) new machine learning approches for classification and regression on high-dimensional and structured data; iii) content-based retrieval techniques.

## External Collaboration

### Methodological collaborations

- Center for Medical Image Computing University College London UK. (Sébastien Ourselin Daniel Alexander)
- Scientific Computing and Imaging (SCI) Institute University of Utah USA. (Guido Gerig Sarang Joshi Marcel Prastawa)
- Departement of Physics. Queen Mary University of London UK. (Vito Latora)
- Center for Magnetic Resonance Research University of Minnesota USA \r\n(Pierre-François Van de Moortele Tom Henry Kamil Ugurbil)
- Inria Asclepios. (Nicholas Ayache)
- ENS de Cachan. (Alain Trouvé)
- Université Paris-Descartes (Joan Glaunès)
- Laboratoire AMIS Université Paul Sabatier Toulouse (José Braga Jean Dumoncel)
- Institut Pasteur Paris (Roberto Toro
- INSEAD Fontainebleau (Theodoros Evgeniou)
- Neurospin (Jean-François Mangin Alexandre Vignaud Vincent Frouin Lucie Hertz-Pannier)
### Medical collaborations
- Sainte-Anne Hospital Paris \r\n(Catherine Oppenheim Marie Sarazin)
- Bordeaux University Hospital \r\n(Carole Dufouil)
- Cycéron Caen University Hospital \r\n(Gaël Chételat Francis Eustache Béatrice Desgranges)
- Lille University Hospital (Christine Delmaire)

## Local Collaborations

### Methodological collaborations
- CENIR MRI core facility (Stéphane Lehéricy Eric Bardinet Romain Valabrègue)
- CENIR MEG/EEG core facility (Nathalie George Denis Schwartz Laurent Hugueville)
- ICM/IHU Bioinformatics/biostatistics core facility (Ivan Moszer)
- Laboratoire dImagerie Biomédicale (Marie-Odile Habert)
### Medical collaborations
- IM2A / ICM Bruno Duboiss team (Bruno Dubois Harald Hampel Marc Teichmann Isabelle Le Ber)
- ICM Alexis Brices team (Alexis Brice Isabelle Le Ber Christel Depienne Jean-Christophe Corvol)
- ICM Marie Vidailhet / Stéphane Lehéricys team (Marie Vidailhet Stéphane Lehéricy Andreas Hartmann Yulia Worbe)
- ICM Catherine Lubetzki / Bruno Stankoffs team (Bruno Stankoff Benedetta Bodini)
- ICM Brahim Nait Oumesmar / Anne Baron Van Evercoorens team (Violetta Zujovic)
- Department of Neuroradiology Pitié-Salpêtrière Hospital

## Fundings

Funding / main grants
- - European Union H2020 program project EuroPOND
- European Union H2020 program project VirtualBrainCloud
- IHU ICM Investissements davenir
- ERC Starting Grant project LEASP (S. Durrleman)
- NSF/NIH/ANR program “Collaborative Research in Computational Neuroscience” project HIPLAY7
- NSF/NIH/ANR program “Collaborative Research in Computational Neuroscience” project NetBCI
- ANR project PREVDEMALS
- ICM Big Brain Theory Program (project DYNAMO project PredictICD),
- Inria Project Lab Program (project Neuromarkers)
- Fondation pour la Recherche sur Alzheimer (project HistoMRI)
- Abeona Foundation (project Brain@Scale)
- Fondation Vaincre Alzheimer
- IDEX Sorbonne Universités project LearnPETMR
