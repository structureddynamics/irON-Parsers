<?php
include_once("CommonParser.php");

$csvFile =
  "&&recordList
&id,&type,&prefLabel,&homepage,&authorClaimsPage,&isAuthorOfTitle,&isAuthorOfTitle&prefURL
info:lib:am:2009-02-18:maria_francisca_abad_garcia,Person,Maria Francisca Abad-Garcia,,http://authorclaim.org/profile/pab1/,Acceso Abierto y revistas m?dicas espa?olas,http://eprints.rclis.org/11490/1/open_acces_Medicina_Cl%C3%ADnica_2006_versi%C3%B3n_aceptada_del_autor.pdf
,,,,,Una base de datos de recursos web m?dicos: una soluci?n a medida para una recuperaci?n m?s eficaz de informaci?n de Internet,http://eprints.rclis.org/527/2/15_UV_BD_Good.pdf
,,,,,[Open access and the Spanish medical journals],http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17040632
,,,,,Produccion cient?fica de la Comunitat Valenciana en materias de biomedicina y ciencias de la salud a trav?s de las bases de datos del Institute of Scientific Information (ISI) 2000-2004.,http://eprints.rclis.org/15459/1/produccion_cientifica_def_200307%5B1%5D.pdf
,,,,,La base de datos de recursos web de la biblioteca m?dica virtual del COMV,http://eprints.rclis.org/8788/1/La_base_de_datos_de_recursos_web_de_la_biblioteca_m%C3%A9dica_virtual_del_COMV.pdf
,,,,,Uso de internet por los m?dicos colegiados de Valencia: un estudio de viabilidad de la Biblioteca M?dica Virtual del Colegio Oficial de M?dicos de Valencia,http://eprints.rclis.org/12145/1/epi_vol_13_n_2.pdf
,,,,,Ampliando el horizonte de MEDLINE : 100 bases de datos bibliogr?ficas m?dicas gratuitas en la red,http://eprints.rclis.org/5179/1/Herramientas_internet_Malaga_2003.pdf
,,,,,\"Information needs and uses: an analysis of the literature published in Spain, 1990?2004\",http://eprints.rclis.org/12136/1/Information_needs_and_uses.pdf
info:lib:am:1971-02-01:jose_manuel_barrueco,Person,Jose Manuel Barrueco,http://www.uv.e/=barrueco,http://authorclaim.org/profile/pba1/,Personal Data in a Large Digital Library,http://citeseer.ist.psu.edu/473002.html
,,,,,Cataloging Economics preprints: an introduction to the RePEc project,http://citeseer.ist.psu.edu/251821.html
,,,,,Personal Data in a Large Digital Library,http://citeseer.ist.psu.edu/466126.html
,,,,,WoPEc usage in 1999AD,http://citeseer.ist.psu.edu/623255.html
,,,,,Distributed Cataloging on the Internet: the RePEc project,http://citeseer.ist.psu.edu/360116.html
,,,,,Automated Extraction of Citation Data in a Distributed Digital Library.,http://dblp.uni-trier.de/db/conf/nddl/nddl2002.html#CruzK02
,,,,,ReLIS: una biblioteca digital distribuida para Documentaci?n.,http://dblp.uni-trier.de/db/conf/jbidi/jbidi2002.html#CollC02
,,,,,Personal Data in a Large Digital Library.,http://dblp.uni-trier.de/db/conf/ercimdl/ecdl2000.html#CruzKK00
info:lib:am:2009-07-14:geoffrey_bilder,Person,Geoffrey Bilder,,http://authorclaim.org/profile/pbi1/,,
info:lib:am:2009-04-29:travis_c_brooks,Person,Travis C. Brooks,,http://authorclaim.org/profile/pbr1/,Subject Access through Community Partnerships: A Case Study,http://arxiv.org/abs/physics/0309027
,,,,,Open Access Publishing in Particle Physics: A Brief Introduction for the non-Expert,http://arxiv.org/abs/0705.3466
,,,,,Open Access Publishing in Particle Physics: A Brief Introduction for the non-Expert,http://dblp.uni-trier.de/db/journals/corr/corr0705.html#abs-0705-3466
,,,,,Recalculation of Proton Compton Scattering in Perturbative QCD,http://arxiv.org/abs/hep-ph/0004143
,,,,,Information Resources in High-Energy Physics: Surveying the Present Landscape and Charting the Future Course,http://dblp.uni-trier.de/db/journals/corr/corr0804.html#abs-0804-2701
,,,,,Information Resources in High-Energy Physics: Surveying the Present Landscape and Charting the Future Course,http://arxiv.org/abs/0804.2701
,,,,,Preliminary Results from a Search for Disoriented Chiral Condensates at MiniMax,http://arxiv.org/abs/hep-ex/9608012
info:lib:am:1971-02-23:bjoern_brembs,Person,Bj?rn Brembs,http://brembs.net,http://authorclaim.org/profile/pbr2/,Operant learning of Drosophila at the torque meter.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=19066552
,,,,,Flight initiation and maintenance deficits in flies with genetically altered biogenic amine levels.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17928454
,,,,,Different parameters support generalization and discrimination learning in Drosophila at the flight simulator.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17015859
,,,,,Double dissociation of PKC and AC manipulations on operant and classical learning in Drosophila.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18674907
,,,,,Conditioning with compound stimuli in Drosophila melanogaster in the flight simulator.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=11683440
,,,,,Order in spontaneous behavior.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17505542
,,,,,The Drosophila black enigma: the molecular and behavioural characterization of the black1 mutant allele.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15878647
,,,,,Context and occasion setting in Drosophila visual learning.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17015858
,,,,,Extending in vitro conditioning in Aplysia to analyze operant and classical processes in the same preparation.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15254218
,,,,,The operant and the classical in conditioned orientation of Drosophila melanogaster at the flight simulator.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=10753977
,,,,,Operant conditioning in invertebrates.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=14662373
,,,,,Operant reward learning in Aplysia: neuronal correlates and mechanisms.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=12040200
,,,,,Drosophila as a new model organism for the neurobiology of aggression?,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=11948200
info:lib:am:1961-06-18:ghislaine_chartron,Person,ghislaine chartron,,http://authorclaim.org/profile/pch1/,,
info:lib:am:2009-08-03:muhammad_yahya_cheema,Person,Muhammad Yahya Cheema,http://www.resinq.com,http://authorclaim.org/profile/pch2/,,
info:lib:am:1965-06-05:joanna_p_davies,Person,Joanna P. Davies,,http://authorclaim.org/profile/pda1/,Fabry disease: fourteen alpha-galactosidase A mutations in unrelated families from the United Kingdom and other European countries.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=8875188
,,,,,Anderson-Fabry disease: clinical manifestations of disease in female heterozygotes.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=11804208
,,,,,\"Differential gene expression in apoptosis: identification of ribosomal protein 23K, a cell proliferation inhibitor.\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=9758718
,,,,,Topological analysis of Niemann-Pick C1 protein reveals that the membrane orientation of the putative sterol-sensing domain is identical to those of 3-hydroxy-3-methylglutaryl-CoA reductase and sterol regulatory element binding protein cleavage-activating protein.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=10821832
,,,,,\"Multiple plasma membrane receptors but not NPC1L1 mediate high-affinity, ezetimibe-sensitive cholesterol uptake into the intestinal brush border membrane.\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17689140
,,,,,The role of the Niemann-Pick C1-like 1 protein in the subcellular transport of multiple lipids and their homeostasis.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16680025
,,,,,\"Targeting of NPC1 to late endosomes involves multiple signals, including one residing within the putative sterol-sensing domain.\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15347664
,,,,,Inactivation of NPC1L1 causes multiple lipid transport defects and protects against diet-induced hypercholesterolemia.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15671032
,,,,,Endosomal accumulation of Toll-like receptor 4 causes constitutive secretion of cytokines and activation of signal transducers and activators of transcription in Niemann-Pick disease type C (NPC) fibroblasts: a potential basis for glial cell activation in the NPC brain.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17314284
,,,,,Cholesterol depletion facilitates ubiquitylation of NPC1 and its association with SKD1/Vps4.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16757520
,,,,,Hepatic Niemann-Pick C1-like 1 regulates biliary cholesterol concentration and is a target of ezetimibe.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17571164
,,,,,Niemann-Pick C1 is a late endosome-resident protein that transiently associates with lysosomes and the trans-Golgi network.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=10479477
,,,,,Transmembrane molecular pump activity of Niemann-Pick C1 protein.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=11125140
,,,,,Accumulation of cholera toxin and GM1 ganglioside in the early endosome of Niemann-Pick C1-deficient cells.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=11675488
,,,,,Evidence for a Niemann-pick C (NPC) gene family: identification and characterization of NPC1L1.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=10783261
,,,,,Reduced sensitivity of Niemann-Pick C1-deficient cells to theta-toxin (perfringolysin O): sequestration of toxin to raft-enriched membrane vesicles.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15069562
,,,,,Telomerase immortalization upregulates Rab9 expression and restores LDL cholesterol egress from Niemann-Pick C1 late endosomes.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=12576506
,,,,,Class B type I scavenger receptor is responsible for the high affinity cholesterol binding activity of intestinal brush border membrane vesicles.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17442616
,,,,,Diosgenin stimulation of fecal cholesterol excretion in mice is not NPC1L1 dependent.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=19141868
,,,,,Genetic inactivation of NPC1L1 protects against sitosterolemia in mice lacking ABCG5/ABCG8.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18796403
,,,,,Reduced absorption of saturated fatty acids and resistance to diet-induced obesity and diabetes by ezetimibe-treated and Npc1l1-/- mice.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18718999
info:lib:am:2009-08-10:ashkbiz_danehkar,Person,Ashkbiz Danehkar,http://www.researcherid.com/rid/C-2053-2009,http://authorclaim.org/profile/pda2/,,
info:lib:am:2009-10-02:antonella_de_robbio,Person,Antonella De Robbio,http://www.derobbio.it,http://authorclaim.org/profile/pde1/,Open Access: Open Problems,http://eprints.rclis.org/10163/
,,,,,Digital Math Library DML: un progetto mondiale per la matematica,http://eprints.rclis.org/99/
,,,,,Open Archive per la comunicazione scientifica,http://eprints.rclis.org/43/
,,,,,E-LIS : an international open archive towards building open digital libraries,http://eprints.rclis.org/4476/
,,,,,An Italian Biomedical Publications Database,http://eprints.rclis.org/94/
,,,,,Gli Opac nel Veneto,http://eprints.rclis.org/12435/
,,,,,Servizi bibliotecari personalizzati basati su RSS feeds : i diversi volti di un nuovo canale di comunicazione,http://eprints.rclis.org/5872/
,,,,,\"Resoconto sulle sessioni sul copyright. CML Committee on Copyright and other Legal Matters. IFLA, Oslo 14-18 agosto 2005\",http://eprints.rclis.org/6201/
,,,,,Mathematics Subject Classification and related schemes in the OAI framework. In: Find and Post Mathematics in the Web A workshop on Electronic Information and Communication in Mathematics,http://eprints.rclis.org/60/
,,,,,Mathematics Subject Classification e classificazioni connesse nel mondo digitale,http://eprints.rclis.org/23/
,,,,,The management of an international open access repository : the case of E-LIS,http://eprints.rclis.org/16335/
,,,,,Mathematics Subject Classification (MSC) and related Schemes in the Digital World,http://eprints.rclis.org/22/
,,,,,\"Banche dati per la matematica, cooperazione per il 2000\",http://eprints.rclis.org/188/
,,,,,Mathematics subject classification and related schemes in the OAI framework,http://eprints.rclis.org/1612/
,,,,,\"Bibliotecari con Moodle, su Moodle, per Moodle\",http://eprints.rclis.org/13397/
,,,,,Vincenti e perdenti nelle sfide del Database Networking: dalle antiche torri ai sistemi clienti/serventi,http://eprints.rclis.org/573/
,,,,,\"Flash su alcune sessioni del WLIC 2005 World Library and Information Congress dell?IFLA, Oslo 14-18 agosto 2005\",http://eprints.rclis.org/5685/
,,,,,Nuovi scenari nel diritto d'autore italiano: dove sono finite le libere utilizzazioni? [Italian],http://eprints.rclis.org/114/
,,,,,Analisi citazionale e indicatori bibliometrici nel modello Open Access,http://eprints.rclis.org/11999/
,,,,,\"Copyright scientifico per l?universit? e la ricerca. Intervento alla Tavola rotonda ?Spazi e prospettive della Cultura in Digitale? al Convegno \"\"Diritto e Tecnologie Digitali per la Valorizzazione e l'accessibilit? delle Conoscenze\"\", Milano, 20 ottobre 2007\",http://eprints.rclis.org/12185/
,,,,,Progetti di digitalizzazione: vademecum on-the-fly,http://eprints.rclis.org/137/
,,,,,Evoluzione e rivoluzione dei periodici elettronici,http://eprints.rclis.org/76/
,,,,,Metadati per la comunicazione scientifica [Italian],http://eprints.rclis.org/122/
,,,,,\"William Y. Arms \"\"Digital libraries\"\". Cambridge, MA, London: MIT Press, 2000. xi, 287 pp. ISBN 0-262-01180-8 Price ?27.95\",http://eprints.rclis.org/4869/
,,,,,Archivi aperti. [Dibattito televisivo],http://eprints.rclis.org/4443/
,,,,,Stato dell'arte del diritto d'autore in Italia : emergenza biblioteche,http://eprints.rclis.org/90/
,,,,,Open access e copyright: il copyright scientifico nelle produzioni intellettuali di ricerca,http://eprints.rclis.org/8268/
,,,,,Relazione tecnica su DSpace (MIT),http://eprints.rclis.org/32/
,,,,,Rights management policies in the Open Access environment,http://eprints.rclis.org/12303/
,,,,,Periodici elettronici nel ciberspazio,http://eprints.rclis.org/80/
,,,,,Frammenti Gottfrield Wilhem Leibniz fra propriet? intellettuale e biblioteca universale,http://eprints.rclis.org/5686/
,,,,,Medline free on the Web : the PubMed and Internet Grateful Med services of the National Library of Medicine,http://eprints.rclis.org/1121/
,,,,,Berlin5 Accesso aperto. Dalla pratica all?impatto: Le conseguenze della disseminazione della conoscenza. Report della conferenza,http://eprints.rclis.org/12044/
,,,,,E-prints for Library and Information Science (E-LIS) : la tecnolog?a al servicio de la bibliotecolog?a y las ciencias de la informaci?n,http://eprints.rclis.org/2849/
,,,,,\"\"\"OPAC italiani\"\" di AIB-WEB si interroga: la risposta ? MAI\",http://eprints.rclis.org/572/
,,,,,Right to access to contents versus intellectual property rights in the Global Information Infrastructure [First version presented at the International Conference] Diritto di accesso ai contenuti e diritti di propriet? intellettuale nell'infrastruttura globale dell'informazione [versione italiana presentata al convegno internazionale],http://eprints.rclis.org/47/
,,,,,E-LIS : un archivio aperto internazionale per la Biblioteconomia e Scienza dell'Informazione,http://eprints.rclis.org/2308/
,,,,,Management eines internationalen Open Access-Archivs: das Beispiel E-LIS,http://eprints.rclis.org/16636/
,,,,,\"MKM Mathematical Knowledge Management : Second International Conference on MKM Mathematical Knowledge Management 2003. Bertinoro (Forl?), 16-20 febbraio 2003\",http://eprints.rclis.org/119/
,,,,,Chi ha creato il primo circuito per la distribuzione e lo scambio di preprint?,http://eprints.rclis.org/6844/
,,,,,Medline: ERL versus Pub/Med. Valutazione comparativa tra l'accesso a Medline Pub/Med della National Library of Medicine e l'accesso a Medline su ERL [Italian],http://eprints.rclis.org/83/
,,,,,\"Terzo Modulo dello Studio Biblioteconomico per lo Studio di fattibilit? della BEIC Biblioteca Europea di Informazione e Cultura: Digitalizzazione e Copyright\"\". Aprile 2002 (pagg. 191)\",http://eprints.rclis.org/85/
,,,,,Forme di tutela giuridica per le banche dati fra diritto d'autore e diritto sui generis: il Decreto Legislativo n. 169/99 del 15 giugno 1999 e la Legge n. 248 del 18 agosto 2000 [Italian],http://eprints.rclis.org/759/
,,,,,Open access in Italia,http://eprints.rclis.org/6815/
,,,,,MyLibrary,http://eprints.rclis.org/61/
,,,,,\"Osservazioni sul decreto legislativo di attuazione della direttiva 2001/29/CE, sull'armonizzazione di taluni aspetti del diritto d'autore e dei diritti connessi nella societ? dell'informazione\",http://eprints.rclis.org/115/
,,,,,Analysis of the Italian Biomedical and Veterinary Serial Publications: Remarks About the International Visibility,http://eprints.rclis.org/92/
,,,,,Scientific and General Subject Classifications in the Digital World,http://eprints.rclis.org/26/
,,,,,Open Access e copyright negli archivi istituzionali: il ruolo delle universit? nella gestione dei diritti,http://eprints.rclis.org/15772/
,,,,,Diritto d'autore e norma italiana: torre di Babele o soglia al terzo millennio?,http://eprints.rclis.org/12436/
,,,,,Berlin5 Open Access: Desde la pr?ctica al impacto. Consecuencias de la diseminaci?n del conocimiento,http://eprints.rclis.org/13241/
,,,,,OPAC ricombinanti tra nuovi assetti di mercato e cambiamenti tecnologici,http://eprints.rclis.org/413/
,,,,,A proposito di digital library [discussioni],http://eprints.rclis.org/12439/
,,,,,On the road of e-journals : paesaggi in movimento nell'evoluzione dei periodici elettronici,http://eprints.rclis.org/75/
,,,,,Voltapagina : un progetto tra l?Universit? degli Studi di Padova e le scuole del territorio,http://eprints.rclis.org/3131/
,,,,,I periodici elettronici in Internet. Stato dell'arte e prospettive di sviluppo,http://eprints.rclis.org/12434/
,,,,,Relazione tecnica su CDSware. Technical report on CDSware,http://eprints.rclis.org/31/
,,,,,\"Propriet? intellettuale nel circuito della comunicazione scientifica \"\"open\"\"\",http://eprints.rclis.org/7/
,,,,,Nuova versione 2001 del MAI Metaopac Azalai italiano,http://eprints.rclis.org/2155/
,,,,,Medline: comparazione tecnica tra le due versioni ERL (Express e Advanced),http://eprints.rclis.org/84/
,,,,,The International Effort Towards the Creation of an International Repository for Library and Information Science: Breaking Barriers in the Access to Scientific Research,http://eprints.rclis.org/16360/
,,,,,\"URI, URN e URL, una questione di definizioni : universal versus uniform\",http://eprints.rclis.org/212/
,,,,,\"Quanto \"\"aperto\"\" ? il vostro OPAC? [Italian presentation]\",http://eprints.rclis.org/361/
,,,,,Risorse online per la matematica nel virtual reference desk scientifico,http://eprints.rclis.org/79/
,,,,,Copyright elettonico: stato dell'arte,http://eprints.rclis.org/113/
,,,,,MetaOPAC Azalai italiano: l'evoluzione negli ultimi anni,http://eprints.rclis.org/12186/
,,,,,Universidade do Porto,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.138.58
,,,,,E-LIS : un open archive per library and information science,http://eprints.rclis.org/2154/
,,,,,E-prints for Library and Information Science (E-LIS): Un modello di archivio per biblioteche digitali aperte,http://eprints.rclis.org/6240/
,,,,,Auto-archiviazione per la ricerca: problemi aperti e sviluppi futuri,http://eprints.rclis.org/180/
,,,,,The interaction between democracy and Internet through libraries in Italy: is the Italian government going to establish controls on Internet Content?,http://eprints.rclis.org/16632/
,,,,,\"Open Access all'UNESCO per un accesso universale alla conoscenza : risultati alla 33.ma Conferenza Generale UNESCO Commissione V Comunicazione e Informazione, 11-13 ottobre 2005\",http://eprints.rclis.org/6706/
,,,,,Diritti vecchi e nuovi tra servizi bibliotecari e social web: come cambiano le regole di un gioco di ruolo,http://eprints.rclis.org/12833/
,,,,,Open archives for Library and Information Science: an international experience = Og?lnodostepne archiwa a informacja naukowa i biblioteczna ? doswiadczenia globalne,http://eprints.rclis.org/12377/
,,,,,Archivi istituzionali e diritto d'autore,http://eprints.rclis.org/16529/
,,,,,Fruizione e produzione di contenuti multimediali e propriet? intellettuale nel cyberspazio,http://eprints.rclis.org/27/
,,,,,Con DoIS l'informazione professionale ? in linea,http://eprints.rclis.org/1732/
,,,,,Mathematics Subject Classification e schemi correlati nell'?mbito di OAI,http://eprints.rclis.org/1643/
,,,,,Metadati nel servizio DoIS per un accesso ibrido all'informazione professionale,http://eprints.rclis.org/33/
,,,,,MathSci,http://eprints.rclis.org/82/
,,,,,MKM Mathematical Knowledge Management,http://eprints.rclis.org/11205/
,,,,,\"Diritto d'autore, diritto dell'editore e del lettore: una difficile dialettica\",http://eprints.rclis.org/310/
,,,,,\"Open Archive per una comunicazione scientifica \"\"free online\"\"\",http://eprints.rclis.org/48/
,,,,,E-LIS : E-prints in Library and Information Science,http://eprints.rclis.org/4497/
,,,,,Un progetto per la classificazione matematica: Multivision MSC2000,http://eprints.rclis.org/1403/
,,,,,Strategie e strumenti dell?Open Access per la valutazione della ricerca,http://eprints.rclis.org/16634/
,,,,,E-LIS : un open archive in Library and Information Science,http://eprints.rclis.org/201/
,,,,,Open Access al centro dei nuovi scenari di e-governance,http://eprints.rclis.org/6806/
,,,,,Workshop on the open archives initiative (OAI) and peer review journals in Europe,http://eprints.rclis.org/2156/
,,,,,Online resources for mathematics in the scientific virtual reference desk,http://eprints.rclis.org/343/
,,,,,\"Virtual Reference Desk: Project of cooperation: debate, technical, agreeements and setting up of the working group. Meeting \"\"A new Library for European People\"\" among Public Libraries in Alpe-Adria Regions for a Cultural Network Organized by Biblioteca Civica Bertoliana ? Vicenza Patronage of Italian Library Association. ALPE-ADRIA WORKING COMMUNITY REGIONE VENETO (Presidency 2001-2002) Working Group on Cultural Relationship Culture and Society Commission\",http://eprints.rclis.org/159/
,,,,,Non solo copyright: le vie dell'Open Access,http://eprints.rclis.org/12898/
,,,,,Right to access to contents versus intellectual property rights in the Global Information Infrastructure [English version published in the Conference Proceedings] Diritto di accesso ai contenuti e diritti di propriet? intellettuale nell'infrastruttura globale dell'informazione [Versione italiana pubblicata sugli Atti della Conferenza],http://eprints.rclis.org/162/
,,,,,Mathematics Subject Classification and Related Schemes in the OAI Framework.,http://dblp.uni-trier.de/db/conf/icm/icm2002ei.html#RobbioMM02
,,,,,Gaining independence with e-prints archives and OAI: secondo workshop OAI in Europa,http://eprints.rclis.org/21/
,,,,,Open Access e gestione dei diritti,http://eprints.rclis.org/15969/
,,,,,Metadati: parola chiave per l'accesso alla biblioteca ibrida,http://eprints.rclis.org/3/
,,,,,E-LIS: the Open Archive for Library and information Science,http://eprints.rclis.org/11032/
,,,,,Tendenze evolutive degli opac italiani visti attraverso il MAI,http://eprints.rclis.org/7548/
,,,,,Tutela giuridica e diritto d'autore nell'editoria elettronica,http://eprints.rclis.org/1/
,,,,,\"Il regolamento di attuazione della legge 15 aprile 2004, n. 106 sul deposito legale dei documenti di interesse culturale destinati all?uso pubblico, per l?universit? e la ricerca\",http://eprints.rclis.org/6656/
,,,,,Il contesto accademico-scientifico e i profili di utenza : l'utente/autore,http://eprints.rclis.org/17/
,,,,,MAI : MetaOPAC Azalai Italiano,http://eprints.rclis.org/1169/
,,,,,Le nuove tecnologie per l'accesso all'informazione: gli strumenti per la costruzione di biblioteche digitali,http://eprints.rclis.org/393/
,,,,,La comunicazione scientifica: il processo di pubblicazione e il mercato,http://eprints.rclis.org/12895/
,,,,,Il copyright scientifico per una gestione aperta della conoscenza,http://eprints.rclis.org/10609/
,,,,,Guide alle biblioteche online,http://eprints.rclis.org/64/
,,,,,\"L'identit? di OPAC1: lo strumento, l'attivit? del gruppo, gli OPAC, prospettive future\",http://eprints.rclis.org/415/
,,,,,La tutela giuridica delle banche nel diritto d'autore e nei diritti connessi.,http://eprints.rclis.org/30/
,,,,,Il copyright negli archivi istituzionali di ateneo,http://eprints.rclis.org/2671/
,,,,,L'enciclopedia aperta Wikipedia e matematica,http://eprints.rclis.org/6831/
,,,,,Gli opac italiani,http://eprints.rclis.org/570/
,,,,,\"Impacts de la Directive europ?enne sur le droit d'auteur et la soci?t? de l'information sur la loi italienne, et sur les exceptions au droit\",http://eprints.rclis.org/6807/
,,,,,History and mission of E-LIS,http://eprints.rclis.org/5379/
,,,,,I metadati per la gestione dei diritti,http://eprints.rclis.org/10450/
,,,,,Gli archivi e-prints in Italia,http://eprints.rclis.org/1168/
,,,,,I periodici elettronici e la persistenza della memoria cartacea: un problema di definizioni,http://eprints.rclis.org/78/
,,,,,Inaugurazione della nuova Biblioteca civica di Abano Terme,http://eprints.rclis.org/2153/
,,,,,Gutenberg on demand,http://eprints.rclis.org/12437/
,,,,,Lancio Web di Voyager nel cyberspazio: il nuovo catalogo online della Library of Congress,http://eprints.rclis.org/12438/
,,,,,Le tesi nel diritto d'autore : un argomento complesso,http://eprints.rclis.org/91/
,,,,,L'evoluzione della specie: dagli OPAC al MetaOpac Presentazione,http://eprints.rclis.org/1033/
,,,,,\"Intervista con Antonella De Robbio, Responsabile del Settore Progetti e Biblioteca Digitale del Centro d'Ateneo per le Biblioteche CAB dell' Universit? di Padova e Referente per il diritto d'autore del Sistema Bibliotecario di Ateneo\",http://eprints.rclis.org/875/
,,,,,Library and Information Science Open Access: a review of the last six years in an international multilingual environment,http://eprints.rclis.org/16362/
,,,,,Interconnessioni tra classificazioni scientifiche e classificazioni generali nel mondo digitale,http://eprints.rclis.org/24/
,,,,,MAI: MetaOPAC Azalai Italien = MAI: MetaOPAC Azalai Italiano,http://eprints.rclis.org/34/
,,,,,\"L'evoluzione della specie: dagli OPAC al MetaOpac Presentazione di MetaOPAC Azalai Italiano. Seminario AIB-WEB-2 L'evoluzione della specie: dagli OPAC al MetaOpac, 19 maggio 1999. Roma\",http://eprints.rclis.org/569/
,,,,,Il copyright negli archivi istituzionali: il ruolo delle Universit? nella gestione dei diritti,http://eprints.rclis.org/15259/
,,,,,\"Indagine comparativa tra i database bibliografici MEDLINE, EMBASE e PASCAL Biomed\",http://eprints.rclis.org/571/
,,,,,\"La biblioteca nel Web, il Web nella biblioteca\",http://eprints.rclis.org/70/
info:lib:am:2009-06-08:eugenio_c_ferreira,Person,Eug?nio C. Ferreira,http://www.deb.uminho.pt/ecferreira/,http://authorclaim.org/profile/pfe1/,\"Image analysis, methanogenic activity measurements, and molecular biological techniques to monitor granular sludge from an EGSB reactor fed with oleic acid.\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=12701926
,,,,,Knowledge-based fuzzy system for diagnosis and control of an integrated biological wastewater treatment process.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16722082
,,,,,Development of an image analysis procedure for identifying protozoa and metazoa typical of activated sludge system.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17399764
,,,,,Activated sludge process monitoring through in situ near-infrared spectral analysis.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18520023
,,,,,\"Kinetic and stoichiometric parameters estimation in a nitrifying bubble column through \"\"in-situ\"\" pulse respirometry.\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18078297
,,,,,Evolutionary Algorithms for Optimal Control in Fed-Batch Fermentation Processes.,http://dblp.uni-trier.de/db/conf/evoW/evoW2004.html#RochaNRF04
,,,,,Estimation of multiple biomass growth rates and biomass concentration in a class of bioprocesses.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=14505168
,,,,,Quantitative image analysis as a diagnostic tool for monitoring structural changes of anaerobic granular sludge during detergent shock loads.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17304560
,,,,,Stalked protozoa identification by image analysis and multivariable statistical techniques.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18327573
,,,,,Evolutionary Algorithms for Static and Dynamic Optimization of Fed-batch Fermentation Processes 1,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.131.7153
,,,,,Evolutionary Approaches for Strain Optimization Using Dynamic Models under a Metabolic Engineering Perspective.,http://dblp.uni-trier.de/db/conf/evoW/evobio2009.html#EvangelistaRFR09
,,,,,Evaluating Simulated Annealing Algorithms in the Optimization of Bacterial Strains.,http://dblp.uni-trier.de/db/conf/epia/epia2007w.html#RochaMMPRF07
,,,,,Development of image analysis techniques as a tool to detect and quantify morphological changes in anaerobic sludge: II. Application to a granule deterioration process triggered by contact with oleic acid.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15236248
,,,,,Ferreira: A Comparison of Algorithms for the Optimization of Fermentation Processes,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.131.756
,,,,,Development of image analysis techniques as a tool to detect and quantify morphological changes in anaerobic sludge: I. Application to a granulation process.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15236247
,,,,,NEOS Server Usage in Wastewater Treatment Cost Minimization.,http://dblp.uni-trier.de/db/conf/iccsa/iccsa2005-4.html#Espirito-SantoFAF05
,,,,,Exact Fuzzy Observer for a Baker's Yeast Fed-Batch Fermentation Process.,http://dblp.uni-trier.de/db/conf/fuzzIEEE/fuzzIEEE2007.html#HerreraCRF07
,,,,,\"Recognition of Protozoa and Metazoa using image analysis tools, discriminant analysis, neural networks and decision trees.\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17605996
,,,,,Quantification of the CBD-FITC conjugates surface coating on cellulose fibres.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18184429
,,,,,Effect of hyperbaric stress on yeast morphology: study by automated image analysis.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15257421
,,,,,Evaluating Evolutionary Algorithms and Differential Evolution for the Online Optimization of Fermentation Processes.,http://dblp.uni-trier.de/db/conf/evoW/evobio2007.html#RochaPRF07
,,,,,Evaluating evolutionary multiobjective algorithms for the in silico optimization of mutant strains.,http://dblp.uni-trier.de/db/conf/bibe/bibe2008.html#MaiaRFR08
,,,,,A new representation in evolutionary algorithms for the optimization of bioprocesses.,http://dblp.uni-trier.de/db/conf/cec/cec2005.html#RochaRF05
,,,,,Automated image analysis to improve bead ingestion toxicity test counts in the protozoan Tetrahymena pyriformis.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=12904224
,,,,,Takagi-sugeno multiple-model controller for a continuous baking yeast fermentation process.,http://dblp.uni-trier.de/db/conf/icinco/icinco2007-icso.html#HerreraCRF07
,,,,,A framework for the integrated analysis of metabolic and regulatory networks.,http://dblp.uni-trier.de/db/conf/bibe/bibe2008.html#MendesLCRRF08
,,,,,Optimization of Bacterial Strains with Variable-Sized Evolutionary Algorithms.,http://dblp.uni-trier.de/db/conf/cibcb/cibcb2007.html#RochaPRF07
,,,,,Morphological analysis of Yarrowia lipolytica under stress conditions through image processing.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=13680341
,,,,,Quantitative image analysis as a diagnostic tool for identifying structural changes during a revival process of anaerobic granular sludge.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17316742
,,,,,A framework for the development of Biomedical Text Mining software tools.,http://dblp.uni-trier.de/db/conf/bibe/bibe2008.html#LourencoCCMGFFRR08
,,,,,Data Integration Issues in the Reconstruction of the Genome-Scale Metabolic Model of Zymomonas Mobillis.,http://dblp.uni-trier.de/db/conf/iwpacbb/iwpacbb2008.html#PintoDLCFRR08
info:lib:am:1968-09-19:gabriel_gallezot,Person,gabriel gallezot,http://www.zotero.org/gabriel,http://authorclaim.org/profile/pga1/,,
info:lib:am:2009-04-26:lambert_heller,Person,Lambert Heller,http://wikify.org/,http://authorclaim.org/profile/phe1/,Bibliothek 2.0 - Die Zukunft der Bibliothek?,http://eprints.rclis.org/12429/
,,,,,\"Social Software ? Bausteine einer \"\"Bibliothek 2.0\"\"\",http://eprints.rclis.org/10129/
,,,,,\"Bibliothek 2.0 - Perspektiven, Probleme, Handlungsbereiche\",http://eprints.rclis.org/13808/
,,,,,Bibliothek 2.0 - Die Zukunft der Bibliothek?,http://eprints.rclis.org/7618/
info:lib:am:2008-01-21:eberhard_r_hilf,Person,Eberhard R. Hilf,http://www.isn-oldenburg.de/~hilf,http://authorclaim.org/profile/phi1/,Flexible Interoperability in a Federated Digital Library of Theses and Dissertations,http://citeseer.ist.psu.edu/496736.html
,,,,,Agent-Based Document Retrieval for the European Physicists: A Project Overview,http://citeseer.ist.psu.edu/476329.html
,,,,,Self-Assembly of Magnetic Nanostructures,http://citeseer.ist.psu.edu/496668.html
,,,,,Agent-Based Document Retrieval for the European Physicists: A Project Overview,http://citeseer.ist.psu.edu/465738.html
,,,,,\"Printed on January 4, 1996\",http://citeseer.ist.psu.edu/60348.html
,,,,,Agent-Based Document Retrieval for the European Physicists: A Project Overview,http://citeseer.ist.psu.edu/214593.html
,,,,,Hyperon star matter.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16057424
,,,,,\"In: Proc. 2nd Int'l. Conf. on the Practical Application of Intelligent Agents and Multi-Agent Technology (PAAM `97), April 21-23, 1997, London, U. K.\",http://citeseer.ist.psu.edu/708072.html
,,,,,\"Capturing the Content of Physics: Systems, Observables, and Experiments.\",http://dblp.uni-trier.de/db/conf/mkm/mkm2006.html#HilfKS06
,,,,,Integrated Information Management for Physics.,http://dblp.uni-trier.de/db/conf/codata/codata94.html#HilfDSC94
info:lib:am:2009-05-03:ahmed_hindawi,Person,Ahmed Hindawi,,http://authorclaim.org/profile/phi2/,A Two-Form Formulation of the Vector-Tensor Multiplet in Central Charge Superspace,http://arxiv.org/abs/hep-th/9706216
,,,,,Non-Trivial Vacua in Higher-Derivative Gravitation,http://arxiv.org/abs/hep-th/9509147
,,,,,Spherically Symmetric Solutions in M\o ller's Tetrad Theory of Gravitation,http://arxiv.org/abs/gr-qc/9409039
,,,,,Consistent Spin-Two Coupling and Quadratic Gravitation,http://arxiv.org/abs/hep-th/9509142
,,,,,Four-Dimensional Higher-Derivative Supergravity and Spontaneous Supersymmetry Breaking,http://arxiv.org/abs/hep-th/9511223
,,,,,Higher-Derivative Gravitation in Bosonic and Superstring Theories and a New Mechanism for Supersymmetry Breaking,http://arxiv.org/abs/hep-th/9509006
,,,,,Energy-Momentum Complex in M\o ller's Tetrad Theory of Gravitation,http://arxiv.org/abs/gr-qc/9406046
,,,,,Two-Dimensional Higher-Derivative Supergravity and a New Mechanism for Supersymmetry Breaking,http://arxiv.org/abs/hep-th/9509174
,,,,,Soft Supersymmetry Breaking Induced by Higher-Derivative Supergravitation in the Electroweak Standard Model,http://arxiv.org/abs/hep-th/9602075
,,,,,Higher-Derivative Gravitation in Bosonic and Superstring Theories,http://arxiv.org/abs/hep-th/9506173
,,,,,Higher-Derivative Gravitation and a New Mechanism for Supersymmetry Breaking in Four-Dimensions,http://arxiv.org/abs/hep-th/9509054
,,,,,Vector-Tensor multiplet in N=2 superspace with central charge,http://arxiv.org/abs/hep-th/9609016
info:lib:am:1956-08-26:jonathan_mark_horridge,Person,Jonathan Mark Horridge,http://www.monash.edu.au/policy/jmh.htm,http://authorclaim.org/profile/pho1/,,
info:lib:am:2008-12-26:paul_kinsler,Person,Paul Kinsler,http://www.qols.ph.ic.ac.uk/~kinsle/,http://authorclaim.org/profile/pki1/,Causality-based criteria for a negative refractive index must be used with care.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18999712
,,,,,Harmonic extended supercontinuum generation and carrier envelope phase dependent spectral broadening in silica nanowires.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18648401
,,,,,Nonlinear envelope equation modeling of sub-cycle dynamics and harmonic generation in nonlinear waveguides.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=19532792
,,,,,Optical carrier wave shocking: detection and dispersion.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17677372
,,,,,The Carrier Dynamical Issues for Extending the Operating Wavelength of Quantum Cascade Lasers,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.29.6817
,,,,,The refractive index and wave vector in passive or active media,http://arxiv.org/abs/0901.2466
,,,,,Four Poynting Theorems,http://arxiv.org/abs/0908.1721
,,,,,Causality-based criteria for a negative refractive index must be used with care,http://arxiv.org/abs/0812.1521
,,,,,Proposal for absolute CEP measurement using 0-to-f self-referencing,http://arxiv.org/abs/0903.2935
,,,,,Ultrashort-pulse modulation in adiabatically prepared Raman media.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15675706
,,,,,\"Comment on \"\"Correct definition of the Poynting vector in electrically and magnetically polarizable medium reveals that negative refraction is impossible.\"\".\",http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=19687994
,,,,,Optical pulse propagation with minimal approximations,http://arxiv.org/abs/0810.5689
whoami:per:1965-06-05:thomas_krichel,Person,Thomas Krichel,http://openlib.org/home/krichel,http://authorclaim.org/profile/pkr1/,Subject description in the Academic Metadata Format,
,,,,,Evaluation of INCISO: A system for automatic elaboration of a Citation Index in Social Science Spanish Journal,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.134.2123
,,,,,Working towards an Open Library for Economics: The RePEc project,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.29.2335
,,,,,The Economics of open bibliographic data provision,http://eprints.rclis.org/3117/
,,,,,The Economics of Open Bibliographic Data Provision,http://econpapers.repec.org/RePEc:uct:uconnp:2005-01
,,,,,The Semantic web and an introduction to RDF,http://eprints.rclis.org/364/
,,,,,Fiscal and monetary policy in a monetary union: Credible inflation targets or monetized debt?,http://econpapers.repec.org/RePEc:spr:weltar:v:132:y:1996:i:1:p:28-54
,,,,,\"RePEc, an Open Library for Economics\",http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.28.9204
,,,,,Setting up large-scale archive networks,http://eprints.rclis.org/939/
,,,,,Proc. Int?l. Conf. on Dublin Core and Metadata Applications 2001 A metadata framework to support scholarly communication *,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.104.4830
,,,,,\"RePEc and Socionet as partners in a changing digital library environment, 1997 to 2004 and beyond\",http://eprints.rclis.org/1830/
,,,,,A metadata framework to support scholarly communication,http://eprints.rclis.org/431/
,,,,,A metadata framework to support scholarly communication.,http://dblp.uni-trier.de/db/conf/dc/dc2001.html#KrichelW01
,,,,,\"The UPS Prototype project: exploring the obstacles in creating a cross-print archive end-user service&amp;quot;, D-Lib Magazine\",http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.12.3967
,,,,,The RePEc database and its Russian partner Socionet,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.25.4471
,,,,,Opening remarks,http://eprints.rclis.org/5380/
,,,,,\"Current Awareness Service of the RePEc Digital Library: Progress, Performance and Potentials\",http://eprints.rclis.org/434/
,,,,,\"Growth, Debt and Public Infrastructure.\",http://econpapers.repec.org/RePEc:kap:ecopln:v:28:y:1995:i:2-3:p:119-46
,,,,,A social network analysis of research collaboration,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.107.9147
,,,,,A report on the closing session of the Workshop on the Open Archives Initiative and Peer Review Journals in Europe,http://eprints.rclis.org/925/
,,,,,E-LIS : E-prints in Library and Information Science,http://eprints.rclis.org/4497/
,,,,,Developing a predictive model of editor selectivity in a current awareness service of a large digital library,http://eprints.rclis.org/2201/
,,,,,Developing a predictive model of editor selectivity in a current awareness service of a large digital library,http://eprints.rclis.org/3431/
,,,,,CitEc: an Autonomous Citation Index for Economics,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.36.4002
,,,,,REPEC AND S-WOPEC: Internet Access to Electronic Preprints in Economics.,http://dblp.uni-trier.de/db/conf/elpub/elpub1999.html#KarlssonK99
,,,,,RePEc and S-WoPEc: Internet access to electronic preprints in Economics,http://eprints.rclis.org/430/
,,,,,Output trends in EC countries and the implications for transition to monetary union,http://econpapers.repec.org/RePEc:eee:ecolet:v:40:y:1992:i:2:p:211-216
,,,,,A social network analysis of research collaboration in the economics community,http://eprints.rclis.org/5993/
,,,,,Building a discipline-specific aggregate for computing and library and information science,http://eprints.rclis.org/1010/
,,,,,\"Seigniorage, taxation and myopia in EMU\",http://econpapers.repec.org/RePEc:pra:mprapa:4472
,,,,,rclis in vision and reality,http://eprints.rclis.org/5378/
,,,,,Syntax and Vocabulary of the Academic Metadata Format,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.20.8907
,,,,,\"Academic Self-Documentation: Which Way Forward for Computing, Library and Information Science?\",http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.25.2571
,,,,,\"Academic Self-Documentation: Which Way Forward for Computing, Library and Information Science?\",http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.23.3420
,,,,,Information retrieval performance measures for a current awareness report composition aid.,http://dblp.uni-trier.de/db/journals/ipm/ipm43.html#Krichel07
,,,,,Information retrieval performance measures for a current awareness report composition aid,http://eprints.rclis.org/6459/
,,,,,Open Archives and Free Online Scholarship * submitted to JCDL2002,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.118.6915
,,,,,Open Archives and Free Online Scholarship,http://eprints.rclis.org/374/
,,,,,Open Archives and Free Online Scholarship,http://eprints.rclis.org/432/
,,,,,OAI and AMF for academic self-documentation,http://eprints.rclis.org/436/
,,,,,From open access to open libraries: claims and visions for Open Academic Libraries,http://eprints.rclis.org/2202/
,,,,,Metadata characteristics as predictors for editor selectivity in a current awareness service,http://eprints.rclis.org/3116/
,,,,,Metadata Characteristics as Predictors for Editor Selectivity in a Current Awareness Service,http://eprints.rclis.org/5191/
,,,,,Written submission to the &quot;AG Neue Medien und Bibliotheken&quot; of the Wissenschaftsrat,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.22.1693
,,,,,Fiscal and Monetary Policy in a Monetary Union: Credible Inflation Targets or Monetised Debt?,http://econpapers.repec.org/RePEc:sur:surrec:9403
,,,,,ReDIF,http://econpapers.repec.org/RePEc:rpc:rdfdoc:redif
,,,,,\"Growth, Debt and Public Infrastructure\",http://econpapers.repec.org/RePEc:sur:surrec:9404
,,,,,Unix Installation,http://econpapers.repec.org/RePEc:rpc:rdfdoc:unixinstall
,,,,,Personal data in a large digital library,http://eprints.rclis.org/435/
,,,,,On-line distribution of working papers through NEP: A Brief Business History,http://eprints.rclis.org/11736/
,,,,,Patterns of research collaboration in a digital library for Economics 1,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.114.7269
,,,,,Access to Scientific Literature on the WWW: the RePEc concept,http://econpapers.repec.org/RePEc:rpc:rdfdoc:concepts
,,,,,The Economics of Open Bibliographic Data Provision,http://econpapers.repec.org/RePEc:eap:articl:v39:y:2009:i:1:p:143-152
,,,,,On-line distribution of working papers through NEP: A Brief Business History,http://econpapers.repec.org/RePEc:wpa:wuwpeh:0505002
,,,,,Personal Data in a Large Digital Library.,http://dblp.uni-trier.de/db/conf/ercimdl/ecdl2000.html#CruzKK00
,,,,,Organizing current awareness in a large digital library,http://eprints.rclis.org/368/
,,,,,Guildford Protocol,http://econpapers.repec.org/RePEc:rpc:rdfdoc:guildp
,,,,,RePEc and S-WoPEc: Internet access to electronic preprints in Economics,http://econpapers.repec.org/RePEc:rpc:rdfdoc:lindi
,,,,,\"RePEc, an Open Library for Economics\",http://eprints.rclis.org/14408/
,,,,,Growing at Different Rates,http://econpapers.repec.org/RePEc:sur:surrec:9801
,,,,,Syntax and Vocabulary of the Academic Metadata Format,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.23.927
,,,,,Instructor,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.116.9210
,,,,,The RePEc database about Economics,http://eprints.rclis.org/893/
,,,,,Distributed Cataloging on the Internet: the RePEc project,http://econpapers.repec.org/RePEc:rpc:rdfdoc:jagt
,,,,,Personal Data in a Large Digital Library,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.22.2622
,,,,,Cataoging Economics preprints: an introduction to the RePEc project,http://econpapers.repec.org/RePEc:rpc:rdfdoc:shankari
,,,,,Does Precommitment Raise Growth? The Dynamics of Growth and Fiscal Policy.,http://econpapers.repec.org/RePEc:bla:scandj:v:103:y:2001:i:2:p:295-316
,,,,,Does Precommitment Raise Growth? The Dynamics of Growth and Fiscal Policy,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.25.9203
,,,,,Dynamic Aspect of Growth and Fiscal Policy,http://econpapers.repec.org/RePEc:sur:surrec:9601
,,,,,The Welfare Economics of Rural to Urban Migration: The Harris-Todaro Model Revisited,http://econpapers.repec.org/RePEc:sur:surrec:9702
,,,,,International Evidence on the Long-Run Implications of the Neoclassical Growth Model.,http://econpapers.repec.org/RePEc:taf:applec:v:27:y:1995:i:2:p:205-10
,,,,,Automatic extraction of citation data in a distributed digital library,http://eprints.rclis.org/429/
,,,,,Building an autonomous citation index for grey literature : the economics working papers case,http://eprints.rclis.org/3072/
,,,,,Cataloging Economics preprints: an introduction to the RePEc project,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.39.1130
,,,,,Distributed Cataloging on the Internet: the RePEc project,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.30.3935
,,,,,Distributed cataloging on the internet: the RePEc project,http://eprints.rclis.org/28/
,,,,,Automated Extraction of Citation Data in a Distributed Digital Library.,http://dblp.uni-trier.de/db/conf/nddl/nddl2002.html#CruzK02
,,,,,Co-uso de documentos en una biblioteca digital = Co-usage of documents in a large digital library,http://eprints.rclis.org/428/
info:lib:am:1947-10-20:michael_julian_kurtz,Person,Michael Julian Kurtz,http://www.cfa.harvard.edu/~kurtz,http://authorclaim.org/profile/pku1/,Mirroring the ADS Bibliographic Databases,http://citeseer.ist.psu.edu/116573.html
,,,,,Data in the ADS -- Understanding How to Use it Better,http://dblp.uni-trier.de/db/journals/corr/corr0610.html#abs-cs-0610029
,,,,,RVSAO 2.0: Digital Redshifts and Radial Velocities,http://citeseer.ist.psu.edu/153483.html
,,,,,Open Access does not increase citations for research articles from The Astrophysical Journal,http://dblp.uni-trier.de/db/journals/corr/corr0709.html#abs-0709-0896
,,,,,Rotation Curve Measurement using Cross-Correlation,http://citeseer.ist.psu.edu/488677.html
,,,,,Preprint typeset using L A T E X style emulateapj v. 20/04/00,http://citeseer.ist.psu.edu/614672.html
,,,,,\"myADS-arXiv - a Tailor-Made, Open Access, Virtual Journal\",http://dblp.uni-trier.de/db/journals/corr/corr0608.html#abs-cs-0608027
,,,,,Mirroring the ADS Bibliographic Databases,http://citeseer.ist.psu.edu/121129.html
,,,,,Creation and use of Citations in the ADS,http://dblp.uni-trier.de/db/journals/corr/corr0610.html#abs-cs-0610011
,,,,,Worldwide use and impact of the NASA Astrophysics Data System digital library.,http://dblp.uni-trier.de/db/journals/jasis/jasis56.html#KurtzEASDM05
,,,,,Connectivity in the Astronomy Digital Library,http://dblp.uni-trier.de/db/journals/corr/corr0610.html#abs-cs-0610008
,,,,,E-prints and Journal Articles in Astronomy: a Productive Co-existence,http://dblp.uni-trier.de/db/journals/corr/corr0609.html#abs-cs-0609126
,,,,,Paper to Screen: Processing Historical Scans in the ADS,http://dblp.uni-trier.de/db/journals/corr/corr0610.html#abs-cs-0610030
,,,,,The bibliometric properties of article readership information.,http://dblp.uni-trier.de/db/journals/jasis/jasis56.html#KurtzEASDMME05
,,,,,The Widest Practicable Dissemination: The NASA Technical Report Server,http://citeseer.ist.psu.edu/37254.html
,,,,,Bibliographic Classification using the ADS Databases,http://dblp.uni-trier.de/db/journals/corr/corr0511.html#abs-cs-0511002
,,,,,Osteomalacia associated with a fibroblast growth factor-23 secreting chest wall tumor.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17723842
,,,,,Various Access Methods to the Abstracts in the Astrophysics Data System,http://citeseer.ist.psu.edu/366566.html
,,,,,\"The Historical Literature of Astronomy, via ADS\",http://citeseer.ist.psu.edu/132223.html
,,,,,The Astrophysics Data System,http://citeseer.ist.psu.edu/158466.html
,,,,,The effect of use and access on citations.,http://dblp.uni-trier.de/db/journals/ipm/ipm41.html#KurtzEAGDHM05
,,,,,The Updated Zwicky Catalog (UZC),http://citeseer.ist.psu.edu/496144.html
,,,,,[In vivo effects of plasma substitutes on the rheologic properties of blood],http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=7688783
,,,,,The NASA Astrophysics Data System: A Heterogeneous Distributed Data Environment.,http://dblp.uni-trier.de/db/conf/codata/codata94.html#KurtzEMSA94
,,,,,Full Text Searching in the Astrophysics Data System,http://dblp.uni-trier.de/db/journals/corr/corr0610.html#abs-cs-0610007
,,,,,The Future of Technical Libraries,http://dblp.uni-trier.de/db/journals/corr/corr0609.html#abs-astro-ph-0609794
,,,,,The Mass Profile Of The Coma Galaxy Cluster,http://citeseer.ist.psu.edu/270329.html
,,,,,The Sociology of Astronomical Publication Using ADS and ADAMS,http://citeseer.ist.psu.edu/178155.html
,,,,,The NASA Astrophysics Data System: Data Holdings,http://citeseer.ist.psu.edu/255170.html
,,,,,The Widest Practicable Dissemination:,http://citeseer.ist.psu.edu/229166.html
,,,,,Finding Astronomical Communities Through Co-readership Analysis,http://dblp.uni-trier.de/db/journals/corr/corr0701.html#abs-cs-0701035
,,,,,The ADS Article Service Data Holdings and Access Methods,http://citeseer.ist.psu.edu/223800.html
,,,,,Astronomical Information Discovery and Access: Design and Implementation of the ADS Bibliographic Services,http://citeseer.ist.psu.edu/488288.html
,,,,,The ADS Article Service Data Holdings and Access Methods,http://citeseer.ist.psu.edu/347940.html
,,,,,The Effect of Use and Access on Citations,http://dblp.uni-trier.de/db/journals/corr/corr0503.html#abs-cs-0503029
,,,,,Effect of E-printing on Citation Rates in Astronomy and Physics,http://dblp.uni-trier.de/db/journals/corr/corr0604.html#abs-cs-0604061
,,,,,A cognitive system for astronomical image interpretation.,http://dblp.uni-trier.de/db/journals/prl/prl11.html#KurtzMO90
,,,,,The NASA Astrophysics Data System: The Search Engine and its User Interface,http://citeseer.ist.psu.edu/246723.html
,,,,,The Digital Library In Astronomy: An Example Of A,http://citeseer.ist.psu.edu/664426.html
,,,,,Automated Resolution of Noisy Bibliographic References,http://dblp.uni-trier.de/db/journals/corr/corr0401.html#cs-DL-0401028
,,,,,\"The Historical Literature of Astronomy, via ADS\",http://citeseer.ist.psu.edu/121656.html
info:lib:am:2008-06-24:emma_mcculloch,Person,Emma McCulloch,http://cdlr.strath.ac.uk/people/mcculloche.htm,http://authorclaim.org/profile/pmc1/,Challenges and issues in terminology mapping: a digital library perspective,http://eprints.rclis.org/archive/2994
,,,,,Collaborative Tagging as a Knowledge Organisation and Resource Discovery Tool,http://eprints.rclis.org/archive/5703
,,,,,Developing a National Information Strategy in Scotland,http://eprints.rclis.org/archive/5178
,,,,,HILT Phase III: Design requirements of an SRW-compliant terminologies mapping pilot,http://eprints.rclis.org/archive/7595
,,,,,HILT : High-Level Thesaurus project phase II : a terminologies server for the JISC Information Environment : final report to JISC,http://eprints.rclis.org/archive/3153
,,,,,\"Investigating the feasibility of a distributed, mapping-based, approach to solving subject interoperability problems in a multi-scheme, cross-service, retrieval environment\",http://eprints.rclis.org/archive/8762
,,,,,Taking Stock of Open Access: Progress and Issues,http://eprints.rclis.org/archive/6205
info:lib:am:2009-05-18:daniel_mietchen,Person,Daniel Mietchen,http://en.citizendium.org/wiki/User:Daniel_Mietchen,http://authorclaim.org/profile/pmi1/,In vivo assessment of cold adaptation in insect larvae by magnetic resonance imaging and magnetic resonance spectroscopy.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=19057644
,,,,,Untangling syntactic and sensory processing: an ERP study of music perception.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17433099
,,,,,Vocal learning in pinnipeds: a model system for human speech evolution.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18531127
,,,,,Cortex reorganization of Xenopus laevis eggs in strong static magnetic fields.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16351729
,,,,,Perceptions about postdocs.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15577920
,,,,,Magnetic resonance imaging of the siliceous skeleton of the demosponge Lubomirskia baicalensis.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16364658
,,,,,Peer review--the newcomers' perspective.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16149851
,,,,,In vivo magnetic resonance microscopy of differentiation in Xenopus laevis embryos from the first cleavage onwards.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17244024
,,,,,Scientists and societies: giving young European students a voice.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=14737175
,,,,,Subcellular in vivo 1H MR spectroscopy of Xenopus laevis oocytes.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16361348
info:lib:am:1973-08-29:cameron_neylon,Person,Cameron Neylon,http://openwetware.org/wiki/User:Cameron_Neylon,http://authorclaim.org/profile/pne1/,Chemical and biochemical strategies for the randomization of protein encoding DNA sequences: library construction methods for directed evolution.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=14990750
,,,,,A molecular mousetrap determines polarity of termination of DNA replication in E. coli.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16814717
,,,,,Fuel choices by human platelets in human plasma.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=9063460
,,,,,Anharmonic behavior in the multisubunit protein apoferritin as revealed by quasi-elastic neutron scattering.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18698713
,,,,,Replication termination in Escherichia coli: structure and antihelicase activity of the Tus-Ter complex.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16148308
,,,,,An analysis of the feasibility of short read sequencing.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16275781
,,,,,Multistep synthesis on SU-8: combining microfabrication and solid-phase chemistry on a single material.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=17417911
,,,,,Interaction of the Escherichia coli replication terminator protein (Tus) with DNA: a model derived from DNA-binding studies of mutant proteins by surface plasmon resonance.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=11009613
,,,,,Optimal probe length varies for targets with high sequence variation: implications for probe library design for resequencing highly variable genes.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18563203
,,,,,Optimized conjugation of a fluorescent label to proteins via intein-mediated activation and ligation.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=15025533
,,,,,Small angle neutron and X-ray scattering in structural biology: recent examples from the literature.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=18214466
info:lib:am:1972-02-05:heath_bland_o_connell,Person,Heath Bland O'Connell,http://home.fnal.gov/~hoc,http://authorclaim.org/profile/poc1/,\"VMD, the WZW Lagrangian and ChPT: The Third Mixing Angle\",http://arxiv.org/abs/hep-ph/9905350
,,,,,SU(3) breaking and Hidden Local Symmetry,http://arxiv.org/abs/hep-ph/9804391
,,,,,New results in rho^0 meson physics,http://arxiv.org/abs/hep-ph/9707509
,,,,,\"Radiative Decays, Nonet Symmetry and SU(3) Breaking\",http://arxiv.org/abs/hep-ph/9902326
,,,,,Information Resources in High-Energy Physics: Surveying the Present Landscape and Charting the Future Course,http://dblp.uni-trier.de/db/journals/corr/corr0804.html#abs-0804-2701
,,,,,On extracting the rho-omega mixing amplitude from the pion form-factor,http://arxiv.org/abs/hep-ph/9707253
,,,,,Recent developments in rho-omega mixing,http://arxiv.org/abs/hep-ph/9604375
,,,,,Physicists Thriving with Paperless Publishing,http://arxiv.org/abs/physics/0007040
,,,,,Rho-Omega Mixing and the Pion Form Factor in the Time-like Region,http://arxiv.org/abs/hep-ph/9707385
,,,,,Near-threshold Isospin Violation in the Pion Form Factor from Chiral Perturbation Theory,http://arxiv.org/abs/hep-ph/9707404
,,,,,Physicists Thriving with Paperless Publishing,http://eprints.rclis.org/473/
,,,,,Information Resources in High-Energy Physics: Surveying the Present Landscape and Charting the Future Course,http://arxiv.org/abs/0804.2701
,,,,,\"Isospin Symmetry Breaking within the HLS Model: A Full ($\rho, \omega, \phi$) Mixing Scheme\",http://arxiv.org/abs/nucl-th/0107047
,,,,,Rho-omega Mixing and the Pion Electromagnetic Form-Factor,http://arxiv.org/abs/hep-ph/9503332
,,,,,\"The Dipion Mass Spectrum In e+e- Annihilation and tau Decay: A Dynamical (rho0, omega, phi) Mixing Approach\",http://arxiv.org/abs/0711.4482
,,,,,Extracting Br(omega->pi^+ pi^-) from the Time-like Pion Form-factor,http://arxiv.org/abs/hep-ph/9809224
,,,,,Anomalous $\eta/\eta^\prime$ Decays: The Triangle and Box Anomalies,http://arxiv.org/abs/nucl-th/0306078
,,,,,Rho-Omega Mixing and Direct CP Violation in Hadronic B-Decays,http://arxiv.org/abs/hep-ph/9705453
,,,,,Extracting the rho-omega mixing amplitude from the pion form-factor,http://arxiv.org/abs/hep-ph/9703248
,,,,,Hidden Symmetry and Georgi's Vector Limit,http://arxiv.org/abs/hep-ph/9810422
,,,,,Direct CP Violation in $B^\pm\to\rho^\pm\pi^+\pi^-$ in the $\rho^0$-$\omega$ Interference Region,http://arxiv.org/abs/hep-ph/9707414
,,,,,Constraints on the momentum dependence of rho-omega mixing,http://arxiv.org/abs/hep-ph/9405273
,,,,,The Pion Form Factor Within the Hidden Local Symmetry Model,http://arxiv.org/abs/nucl-th/0301037
,,,,,Vector meson dominance and the rho meson,http://arxiv.org/abs/hep-ph/9807537
,,,,,Analysis of rho-omega interference in the pion form-factor,http://arxiv.org/abs/hep-ph/9601309
,,,,,\"Rho-omega mixing, vector meson dominance and the pion form-factor\",http://arxiv.org/abs/hep-ph/9501251
,,,,,An Effective Approach to VMD at One Loop Order and the Departures from Ideal Mixing for Vector Mesons,http://arxiv.org/abs/nucl-th/0004005
,,,,,Vector Meson Mixing and Charge Symmetry Violation,http://arxiv.org/abs/hep-ph/9510425
info:lib:am:2009-02-12:fernanda_peset,Person,fernanda peset,,http://authorclaim.org/profile/ppe1/,Pol?ticas editoriales en la documentaci?n espa?ola e implantaci?n de E-LIS (E-Prints in Library and Information Science),http://eprints.rclis.org/416/1/CALSI.pdf
,,,,,Nuevas t?cnicas de publicaci?n cient?fica. Tercera Jornada Medes-Lilly,http://eprints.rclis.org/13552/1/medes-3.pdf
,,,,,Iniciativas espa?olas en OAI-PMH: presente y proyectos inmediatos,http://eprints.rclis.org/6679/1/2006-PESET.pdf
,,,,,An?lisis de los directorios privados de informaci?n empresarial espa?ola,http://eprints.rclis.org/15406/1/243-257.pdf
,,,,,Indicadores de rendimiento para acciones de acceso abierto,http://eprints.rclis.org/15376/1/indicadores_redimientoOAI.pdf
,,,,,IRALIS: International Registry for Authors - Links to Identify Scientists Benefits for Spanish scholars and academia,http://eprints.rclis.org/15527/1/iralis-online-2008-version-2-fp.pdf
,,,,,Normalizaci?n de la informaci?n: la aportaci?n de IraLIS,http://eprints.rclis.org/12804/1/Articulo-IraLIS.pdf
,,,,,\"Impact of OAI protocol in Spain, Portugal and Latin America\",http://eprints.rclis.org/13246/1/Peset_Ferrer_Baiget_A1.pdf
,,,,,Interoperatividad entre repositorios y proveedores de servicios,http://eprints.rclis.org/8280/1/zaragoza_para_elis.pdf
,,,,,Normalizaci?n de la firma de autores por disciplina en repositorios catalanes: una aproximaci?n estad?stica,http://eprints.rclis.org/13767/1/Normalizaci%C3%B3n_de_la_firma_de_autores_por_disciplina_en_repositorios_catalanes%2C_una_aproximaci%C3%B3n_estad%C3%ADstica.pdf
,,,,,Implantaci?n del protocolo Open Archives Initiative-Protocol for Metadata Harvesting en Espa?a,http://eprints.rclis.org/12724/1/poster_online.pdf
,,,,,Organizaci?n de la informaci?n art?stica en entornos hipertexto e hipermedia,http://eprints.rclis.org/388/1/intermediafpeset.pdf
,,,,,Aula virtual de prevenci?n de riesgos,http://eprints.rclis.org/5673/1/riesgos.pdf
,,,,,Implantaci?n de la Open Archives Initiative en Espa?a,http://eprints.rclis.org/15432/1/Implantaci%C3%B3n_de_la_Open_Arc_pub_2008.pdf
,,,,,Entrevista a Tom?s Baiget,http://eprints.rclis.org/14022/1/entrevista_tomas_s1995-05-01.pdf
,,,,,El proyecto WinEcs: una visi?n pr?ctica para la implantaci?n de bibliotecas digitales,http://eprints.rclis.org/386/1/ISKO.pdf
,,,,,E-LIS : Central repository on Library and Information Science,http://eprints.rclis.org/15526/1/ELIS-Online-Meeting.pdf
,,,,,Tendencias internacionales en el acceso libre a la documentaci?n cient?fica digital : OAI-Open Archives Initiative,http://eprints.rclis.org/4131/1/ortin_y_peset.pdf
,,,,,Scientific publishing in the European research area,http://eprints.rclis.org/14565/1/scientific_publication_v6u311414188676x.pdf
,,,,,El mapa de lectura p?blica valenciana : un instrumento de trabajo y planificaci?n,http://eprints.rclis.org/3914/1/com_383.pdf
,,,,,Evoluci?n social y networking en la comunidad biblio-documental,http://eprints.rclis.org/15200/1/Networking.pdf
,,,,,E-LIS: una comunidad internacional de profesionales,http://eprints.rclis.org/12580/1/ELIS-meeting-Valencia-Peset.pdf
,,,,,Recursos de informaci?n distribuidos en red: contenidos digitales para unidades documentales de arte en Espa?a,http://eprints.rclis.org/390/1/arte.pdf
,,,,,Red espa?ola de trabajos cient?ficos : estudio de viabilidad de la implantaci?n de una biblioteca digital y an?lisis de sus derechos de autor,http://eprints.rclis.org/3172/1/EA20020085.PDF
,,,,,Authority records for author's names in Library and Information Science,http://eprints.rclis.org/9601/1/OAI5-poster-18-03-07_v2.jpg
,,,,,\"Bibliotecas digitales en Internet de libro raro, antiguo e incunables\",http://eprints.rclis.org/387/1/%C3%ADncunables.pdf
,,,,,\"?El aprendizaje desde la pr?ctica\"\". Integraci?n de nuevas metodolog?as docentes en la Licenciatura de Documentaci?n de la Universidad Polit?cnica de Valencia\",http://eprints.rclis.org/385/1/PESET_FERRER.pdf
,,,,,Desarrollo de una Biblioteca Digital como herramienta de apoyo a la Formaci?n a Distancia aplicada a las normas ISO 9000,http://eprints.rclis.org/5674/1/comunicacion.pdf
,,,,,\"Use of OAI protocol and its impact in digital libraries: a case study in Spain, Portugal and Latin America\",http://eprints.rclis.org/10931/1/OAI-in-Spain-etc_p51_fernanda_ferrer_imma.pdf
,,,,,CVN: normalizaci?n de los curr?culos cient?ficos,http://eprints.rclis.org/14563/1/FINAL_g644787878lvw000.pdf
,,,,,Biblioteca de Sociales (algo m?s que un edificio),http://eprints.rclis.org/1533/1/1999-28-34.pdf
,,,,,\"Biblioteca Digital de Recursos de Informaci?n, complemento al Portal de Matem?ticas de la Escuela de Caminos de la Universidad Polit?cnica de Valencia\",http://eprints.rclis.org/5671/1/calt.pdf
,,,,,\"Catalogaci?n s?, pero, ?c?mo?\",http://eprints.rclis.org/14564/1/catalogacion_thinkepi.pdf
,,,,,Dspace and the standardization of the information: names of Spanish authors,http://eprints.rclis.org/12722/1/Microsoft_PowerPoint_-_Dspace_and_the_standardization_of_the_informationFINALA4.pdf
info:lib:am:2008-02-24:jim_pitman,Person,Jim Pitman,http://www.stat.berkeley.edu/~pitman/,http://authorclaim.org/profile/ppi1/,Some Properties of the Arc Sine Law Related to Its Invariance Under a Family of Rational Maps,http://citeseer.ist.psu.edu/186189.html
,,,,,Some Developments of the Blackwell-MacQueen Urn Scheme,http://citeseer.ist.psu.edu/419261.html
,,,,,Random Discrete Distributions Invariant Under Size-biased Permutation,http://citeseer.ist.psu.edu/409122.html
,,,,,\"Riffle Shuffles, Cycles, and Descents.\",http://dblp.uni-trier.de/db/journals/combinatorica/combinatorica15.html#DiaconisMP95
,,,,,Random Discrete Distributions Derived From Self-Similar Random Sets,http://citeseer.ist.psu.edu/230711.html
,,,,,Random Brownian Scaling Identities and Splicing of Bessel Processes,http://citeseer.ist.psu.edu/411565.html
,,,,,Some Properties of the Arc Sine Law Related to Its Invariance Under a Family of Rational Maps,http://citeseer.ist.psu.edu/419483.html
,,,,,Some Probabilistic Aspects Of Set Partitions,http://citeseer.ist.psu.edu/418631.html
,,,,,\"Random mappings, forests, and subsets associated with Abel-Cayley-Hurwitz multinomial expansions\",http://citeseer.ist.psu.edu/447055.html
,,,,,Some Probabilistic Aspects Of Set Partitions,http://citeseer.ist.psu.edu/128420.html
,,,,,Partition structures derived from Brownian motion and stable subordinators,http://citeseer.ist.psu.edu/419449.html
,,,,,Some Properties of the Arc Sine Law Related to Its Invariance Under a Family of Rational Maps,http://citeseer.ist.psu.edu/631.html
,,,,,\"Probability laws related to the Jacobi theta and Riemann zeta functions, and Brownian excursions\",http://citeseer.ist.psu.edu/419810.html
,,,,,On the Relative Lengths of Excursions Derived From a Stable Subordinator,http://citeseer.ist.psu.edu/185701.html
,,,,,Stopped Markov chains with stationary occupation times,http://citeseer.ist.psu.edu/409985.html
,,,,,Stopped Markov chains with stationary occupation times,http://citeseer.ist.psu.edu/40066.html
,,,,,Probabilistic Bounds on the Coefficients of Polynomials with Only Real Zeros.,http://dblp.uni-trier.de/db/journals/jct/jcta77.html#Pitman97
,,,,,Stopped Markov chains with stationary occupation times,http://citeseer.ist.psu.edu/96140.html
,,,,,\"Probability laws related to the Jacobi theta and Riemann zeta functions, and Brownian excursions\",http://citeseer.ist.psu.edu/430808.html
,,,,,Random Discrete Distributions Invariant Under Size-biased Permutation,http://citeseer.ist.psu.edu/183732.html
,,,,,Some Developments of the Blackwell-MacQueen Urn Scheme,http://citeseer.ist.psu.edu/188307.html
,,,,,\"Probability laws related to the Jacobi theta and Riemann zeta functions, and Brownian excursions\",http://citeseer.ist.psu.edu/314159.html
,,,,,\"Probability laws related to the Jacobi theta and Riemann zeta functions, and Brownian excursions\",http://citeseer.ist.psu.edu/519618.html
,,,,,Random Brownian Scaling Identities and Splicing of Bessel Processes,http://citeseer.ist.psu.edu/116034.html
,,,,,Path decompositions of a Brownian bridge related to the ratio of its maximum and amplitude,http://citeseer.ist.psu.edu/364266.html
,,,,,The law of the maximum of a Bessel bridge,http://citeseer.ist.psu.edu/341017.html
,,,,,Partition structures derived from Brownian motion and stable subordinators,http://citeseer.ist.psu.edu/61684.html
,,,,,Poisson-Kingman Partitions,http://citeseer.ist.psu.edu/596097.html
,,,,,The distribution of local times of a Brownian bridge,http://citeseer.ist.psu.edu/234370.html
,,,,,Prediction Rules for Exchangeable Sequences Related to Species Sampling,http://citeseer.ist.psu.edu/411732.html
,,,,,Poisson-Dirichlet And Gem Invariant Distributions For Split-And-Merge Transformations Of An Interval Partition.,http://dblp.uni-trier.de/db/journals/cpc/cpc11.html#Pitman02
,,,,,Prediction Rules for Exchangeable Sequences Related to Species Sampling,http://citeseer.ist.psu.edu/129889.html
,,,,,Poisson-Kingman Partitions,http://citeseer.ist.psu.edu/464365.html
,,,,,The Standard Additive Coalescent,http://citeseer.ist.psu.edu/252270.html
,,,,,Laplace Transforms Related to Excursions of a One-dimensional Diffusion,http://citeseer.ist.psu.edu/410669.html
,,,,,Poisson-Dirichlet and GEM invariant distributions for split-and-merge transformations of an interval partition,http://citeseer.ist.psu.edu/445424.html
,,,,,The distribution of local times of a Brownian bridge,http://citeseer.ist.psu.edu/355003.html
,,,,,The SDE solved by local times of a Brownian excursion or bridge derived from the height profile of a random tree or forest,http://citeseer.ist.psu.edu/411685.html
,,,,,On the lengths of excursions of some Markov processes,http://citeseer.ist.psu.edu/419892.html
,,,,,On the distribution of ranked heights of excursions of a Brownian bridge,http://citeseer.ist.psu.edu/211138.html
,,,,,Invariance Principles for Non-uniform Random Mappings and Trees,http://citeseer.ist.psu.edu/625345.html
,,,,,The asymptotic behavior of the Hurwitz binomial distribution,http://citeseer.ist.psu.edu/411353.html
,,,,,On the lengths of excursions of some Markov processes,http://citeseer.ist.psu.edu/115097.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/412067.html
,,,,,The two-parameter Poisson-Dirichlet distribution derived from a stable subordinator.,http://citeseer.ist.psu.edu/356829.html
,,,,,On the Relative Lengths of Excursions Derived From a Stable Subordinator,http://citeseer.ist.psu.edu/410877.html
,,,,,On The Laws Of Homogeneous Functionals Of The Brownian Bridge.,http://citeseer.ist.psu.edu/417794.html
,,,,,On the Relative Lengths of Excursions Derived From a Stable Subordinator,http://citeseer.ist.psu.edu/168224.html
,,,,,Limit Distributions and Random Trees Derived From the Birthday Problem With Unequal Probabilities,http://citeseer.ist.psu.edu/176052.html
,,,,,L E C T R O N I C,http://citeseer.ist.psu.edu/391090.html
,,,,,Inhomogeneous Continuum Random Trees and the Entrance Boundary of the Additive Coalescent,http://citeseer.ist.psu.edu/180007.html
,,,,,On The Laws Of Homogeneous Functionals Of The Brownian Bridge.,http://citeseer.ist.psu.edu/59774.html
,,,,,The Multinomial Distribution on Rooted Labeled Forests,http://citeseer.ist.psu.edu/412832.html
,,,,,Kac's Moment Formula and the Feynman-Kac Formula for Additive Functionals of a Markov Process,http://citeseer.ist.psu.edu/185731.html
,,,,,Laplace Transforms Related to Excursions of a One-dimensional Diffusion,http://citeseer.ist.psu.edu/33428.html
,,,,,Inhomogeneous Continuum Random Trees and the Entrance Boundary of the Additive Coalescent,http://citeseer.ist.psu.edu/272672.html
,,,,,On the distribution of ranked heights of excursions of a Brownian bridge,http://citeseer.ist.psu.edu/238401.html
,,,,,Kac's Moment Formula and the Feynman-Kac Formula for Additive Functionals of a Markov Process,http://citeseer.ist.psu.edu/411970.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/609351.html
,,,,,The SDE solved by local times of a Brownian excursion or bridge derived from the height profile of a random tree or forest,http://citeseer.ist.psu.edu/45976.html
,,,,,Forest Volume Decompositions and Abel - Cayley - Hurwitz Multinomial Expansions.,http://dblp.uni-trier.de/db/journals/jct/jcta98.html#Pitman02
,,,,,Growth of the Brownian forest,http://citeseer.ist.psu.edu/673737.html
,,,,,Forest volume decompositions and Abel-Cayley-Hurwitz multinomial expansions,http://citeseer.ist.psu.edu/476476.html
,,,,,\"Hitting, Occupation, and Inverse Local Times of One-Dimensional Diffusions: Martingale and Excursion Approaches\",http://citeseer.ist.psu.edu/468199.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/410611.html
,,,,,Enumerations Of Trees And Forests Related To Branching Processes And Random Walks,http://citeseer.ist.psu.edu/130579.html
,,,,,escent Random Forests.,http://dblp.uni-trier.de/db/journals/jct/jcta85.html#Pitman99
,,,,,\"The exploration process of inhomogeneous continuum random trees, and an extension of Jeulin's local time identity\",http://citeseer.ist.psu.edu/592302.html
,,,,,Enumerations Of Trees And Forests Related To Branching Processes And Random Walks,http://citeseer.ist.psu.edu/410478.html
,,,,,The Asymptotic Distribution of the Diameter of a Random Mapping,http://citeseer.ist.psu.edu/592235.html
,,,,,Forest volume decompositions and Abel-Cayley-Hurwitz multinomial expansions,http://citeseer.ist.psu.edu/446798.html
,,,,,Infinitely Divisible Laws Associated With Hyperbolic Functions,http://citeseer.ist.psu.edu/380980.html
,,,,,The Standard Additive Coalescent,http://citeseer.ist.psu.edu/115095.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/234409.html
,,,,,\"The exploration process of inhomogeneous continuum random trees, and an extension of Jeulin's local time identity David Aldous and Gregory Miermont and Jim Pitman +\",http://citeseer.ist.psu.edu/604077.html
,,,,,Combinatorial Stochastic Processes,http://citeseer.ist.psu.edu/610513.html
,,,,,Coalescent Random Forests,http://citeseer.ist.psu.edu/362667.html
,,,,,Cyclically Stationary Brownian Local Time Processes,http://citeseer.ist.psu.edu/339064.html
,,,,,Coalescents With Multiple Collisions,http://citeseer.ist.psu.edu/190907.html
,,,,,Constructions Of A Brownian Pathwith A Given Minimum,http://citeseer.ist.psu.edu/363989.html
,,,,,Coalescents With Multiple Collisions,http://citeseer.ist.psu.edu/409878.html
,,,,,Constructions Of A Brownian Pathwith A Given Minimum,http://citeseer.ist.psu.edu/387709.html
,,,,,The asymptotic behavior of the Hurwitz binomial distribution,http://citeseer.ist.psu.edu/133290.html
,,,,,The Multinomial Distribution on Rooted Labeled Forests,http://citeseer.ist.psu.edu/67306.html
,,,,,Brownian Bridge Asymptotics for Random Mappings.,http://dblp.uni-trier.de/db/journals/rsa/rsa5.html#AldousP94
,,,,,The two-parameter Poisson-Dirichlet distribution derived from a stable subordinator.,http://citeseer.ist.psu.edu/151466.html
,,,,,Brownian Bridge Asymptotics for Random p-Mappings,http://citeseer.ist.psu.edu/590038.html
,,,,,Tree-Valued Markov Chains Derived From Galton-Watson Processes.,http://citeseer.ist.psu.edu/365906.html
,,,,,by Jim Pitman,http://citeseer.ist.psu.edu/214005.html
,,,,,\"Vol. 4 (1999) Paper no. 11, pages 1--33. Journal URL\",http://citeseer.ist.psu.edu/270884.html
,,,,,Two recursive decompositions of Brownian bridge related to the asymptotics of random mappings,http://citeseer.ist.psu.edu/608524.html
,,,,,Brownian Bridge Asymptotics for Random,http://citeseer.ist.psu.edu/626426.html
,,,,,\"Brownian Motion, Bridge, Excursion, and Meander Characterized By Sampling At Independent Uniform Times\",http://citeseer.ist.psu.edu/23003.html
,,,,,Wall and Siegmund Duality Relations for Birth and Death Chains with Reflecting Barrier,http://citeseer.ist.psu.edu/65328.html
,,,,,\"Abel-Cayley-Hurwitz multinomial expansions associated with random mappings, forests, and subsets\",http://citeseer.ist.psu.edu/407954.html
,,,,,Wall and Siegmund Duality Relations for Birth and Death Chains with Reflecting Barrier,http://citeseer.ist.psu.edu/411678.html
,,,,,\"Abel-Cayley-Hurwitz multinomial expansions associated with random mappings, forests, and subsets\",http://citeseer.ist.psu.edu/174834.html
,,,,,\"A Polytope Related to Empirical Distributions, Plane Trees, Parking Functions, and the Associahedron\",http://citeseer.ist.psu.edu/210955.html
,,,,,A family of random trees with random edge lengths.,http://dblp.uni-trier.de/db/journals/rsa/rsa15.html#AldousP99
,,,,,Analysis of Top To Random Shuffles.,http://dblp.uni-trier.de/db/journals/cpc/cpc1.html#DiaconisFP92
,,,,,\"A Polytope Related to Empirical Distributions, Plane Trees, Parking Functions, and the Associahedron\",http://citeseer.ist.psu.edu/579000.html
,,,,,\"A Polytope Related to Empirical Distributions, Plane Trees, Parking Functions, and the Associahedron\",http://citeseer.ist.psu.edu/410183.html
,,,,,\"A Polytope Related to Empirical Distributions, Plane Trees, Parking Functions, and the Associahedron\",http://citeseer.ist.psu.edu/249916.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/213427.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/210587.html
,,,,,\"Brownian Motion, Bridge, Excursion, and Meander Characterized By Sampling At Independent Uniform Times\",http://citeseer.ist.psu.edu/234349.html
,,,,,\"A Polytope Related to Empirical Distributions, Plane Trees, Parking Functions, and the Associahedron\",http://citeseer.ist.psu.edu/196578.html
,,,,,\"A Polytope Related to Empirical Distributions, Plane Trees, Parking Functions, and the Associahedron.\",http://dblp.uni-trier.de/db/journals/dcg/dcg27.html#StanleyP02
,,,,,A lattice path model for the Bessel polynomials,http://citeseer.ist.psu.edu/414116.html
,,,,,A lattice path model for the Bessel polynomials,http://citeseer.ist.psu.edu/151988.html
,,,,,\"Algebraic evaluations of some Euler integrals, duplication formulae for Appell's hypergeometric function F_1, and Brownian variations\",http://citeseer.ist.psu.edu/414574.html
,,,,,A lattice path model for the Bessel polynomials,http://citeseer.ist.psu.edu/90496.html
,,,,,Where Did The Brownian Particle Go?,http://citeseer.ist.psu.edu/234187.html
,,,,,\"Algebraic evaluations of some Euler integrals, duplication formulae for Appell's hypergeometric function\",http://citeseer.ist.psu.edu/160399.html
,,,,,Path Transformations of First Passage Bridges,http://citeseer.ist.psu.edu/676349.html
,,,,,\"Algebraic evaluations of some Euler integrals, duplication formulae for Appell's hypergeometric function F 1 , and Brownian variations\",http://citeseer.ist.psu.edu/157755.html
,,,,,\"The exploration process of inhomogeneous continuum random trees, and an extension of Jeulin?s local time identity\",
,,,,,Some probabilistic aspects of set partitions,
,,,,,Path transformations of first passage bridges,
,,,,,\"Markovian bridges: Construction, Palm interpretation, and splicing\",
,,,,,Limit laws for Brownian motion conditioned to reach a high level,
,,,,,On the distribution of ranked heights of excursions of a Brownian bridge,
,,,,,Probability,
,,,,,Two coalescents derived from the ranges of stable subordinators,
,,,,,\"Hitting, occupation and inverse local times of one-dimensional diffusions: Martingale and excursion approaches\",
,,,,,The asymptotic distribution of the diameter of a random mapping,
,,,,,The SDE solved by local times of a Brownian excursion or bridge derived from the height profile of a random tree or forest,
,,,,,Ranked functionals of Brownian excursions,
,,,,,Discretization error in simulation of one-dimensional reflecting Brownian motion,
,,,,,Random discrete distributions invariant under size-biased permutation,
,,,,,Exchangeable and partially exchangeable random partitions,
,,,,,The standard additive coalescent,
,,,,,Random discrete distributions derived from self-similar random sets,
,,,,,Partition structures derived from Brownian motion and stable subordinators,
,,,,,The two-parameter Poisson-Dirichlet distribution derived from a stable subordinator,
,,,,,Some developments of the Blackwell-MacQueen urn scheme,
,,,,,Further asymptotic laws of planar Brownian motion,
,,,,,Forest volume decompositions and Abel-Cayley-Hurwitz multinomial expansions,
,,,,,Constructions of a Brownian path with a given minimum,
,,,,,Growth of the Brownian forest,
,,,,,Brownian bridge asymptotics for random $p$-mappings,
,,,,,Coalescent random forests,
,,,,,Complements to the study of the winding numbers of complex brownian motion around a finite set of points,
,,,,,A pointwise ergodic theorem for the group of rational rotations,
,,,,,Where did the Brownian particle go?,
,,,,,A family of random trees with random edge lengths,
,,,,,\"Brownian motion, bridge, excursion, and meander characterized by sampling at independent uniform times\",
,,,,,Random Brownian scaling identities and splicing of Bessel processes,
,,,,,Coalescents with multiple collisions,
,,,,,Wall and Siegmund duality relations for birth and death chains with reflecting barrier,
,,,,,Cyclically stationary Brownian local time processes,
,,,,,\"Algebraic evaluations of some Euler integrals, duplication formulae for Appell?s hypergeometric function $F_1$ and Brownian variations\",
,,,,,Uniform rates of convergence for Markov chain transition probabilities,
,,,,,A decomposition of Bessel bridges,
,,,,,Weak convergence of random P-mappings and the exploration process of inhomogeneous continuum random trees,
,,,,,Some divergent integrals of Brownian motion,
,,,,,Levy systems and path decompositions,
,,,,,Probabilistic bounds on the coefficients of polynomials with only real zeros (STMA V39 1407),
,,,,,A maximal inequality for skew fields,
,,,,,On coupling of Markov chains,
,,,,,Occupation measures for Markov chains,
,,,,,\"Birth, death and conditioning of Markov chains\",
info:lib:am:1998-10-24:christina_k_pikas,Person,Christina K. Pikas,http://christinaslibraryrant.blogspot.com,http://authorclaim.org/profile/ppi2/,,
info:lib:am:1970-03-16:arun_meda_sannuti,Person,Arun Meda Sannuti,,http://authorclaim.org/profile/psa1/,,
info:lib:am:1972-11-18:julio_santillan_aldana,Person,Julio Santill?n Aldana,http://www.santillanaldana.com,http://authorclaim.org/profile/psa2/,,
info:lib:am:2009-04-29:arthur_paul_smith,Person,Arthur Paul Smith,,http://authorclaim.org/profile/psm1/,Proof of the Atmospheric Greenhouse Effect,http://arxiv.org/abs/0802.4324
,,,,,Optical properties of the vibrations in charged C$_{60}$ molecules,http://arxiv.org/abs/cond-mat/9512020
info:lib:am:2009-06-26:arnold_ben_wagner,Person,Arnold Ben Wagner,http://libweb.lib.buffalo.edu/staff/index.asp?ID=33,http://authorclaim.org/profile/pwa1/,SciFinder Scholar 2006: an empirical analysis of research topic query processing.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=16563008
,,,,,Specialized Reference Works and Their Users. A Preliminary Study.,http://dblp.uni-trier.de/db/journals/jcisd/jcisd15.html#WagnerD75
,,,,,SciFinder Scholar 2006: An Empirical Analysis of Research Topic Query Processing.,http://dblp.uni-trier.de/db/journals/jcisd/jcisd46.html#Wagner06
,,,,,Managing tradeoffs in the electronic age.,http://dblp.uni-trier.de/db/journals/jasis/jasis54.html#Wagner03
,,,,,Specialized reference works and their users. A preliminary study.,http://www.ncbi.nlm.nih.gov/sites/entrez?cmd=retrieve&list_uids=1194384
info:lib:am:2009-10-10:bert_wendland,Person,Bert Wendland,,http://authorclaim.org/profile/pwe1/,,
info:lib:am:2009-06-08:jingtao_yao,Person,JingTao Yao,http://www2.cs.uregina.ca/~jtyao,http://authorclaim.org/profile/pya1/,Rough Approximations under Level Fuzzy Sets.,http://dblp.uni-trier.de/db/conf/rsctc/rsctc2004.html#LiuYY04
,,,,,Growing Hierarchical Self-Organizing Maps for Web Mining.,http://dblp.uni-trier.de/db/conf/webi/webi2007.html#HerbertY07
,,,,,Supporting Research with Weblogs: A Study on Web-Based Research Support Systems.,http://dblp.uni-trier.de/db/conf/iat/iatw2006.html#Yao06
,,,,,Level Construction of Decision Trees in a Partition-based Framework for Classi cation.,http://dblp.uni-trier.de/db/conf/seke/seke2004.html#YaoZY04
,,,,,A Game-Theoretic Approach to Competitive Learning in Self-Organizing Maps.,http://dblp.uni-trier.de/db/conf/icnc/icnc2005-1.html#HerbertY05
,,,,,GTSOM: Game Theoretic Self-organizing Maps.,http://dblp.uni-trier.de/db/series/sci/sci35.html#HerbertY07
,,,,,Web-based Support Systems (WSS): A Report of the WIC Canada Research Centre.,http://dblp.uni-trier.de/db/conf/webi/webi2004.html#YaoYBLJ04
,,,,,Game-Theoretic Risk Analysis in Decision-Theoretic Rough Sets.,http://dblp.uni-trier.de/db/conf/rskt/rskt2008.html#HerbertY08
,,,,,Forecasting and analysis of marketing data using neural networks,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.101.5830
,,,,,A Fast Tree Pattern Matching Algorithm for XML Query.,http://dblp.uni-trier.de/db/conf/webi/webi2004.html#YaoZ04
,,,,,Web-based Support Systems (reprint from WSS'03).,http://dblp.uni-trier.de/db/conf/webi/wss2004.html#YaoY04
,,,,,Web-based Support Systems for Sustainable Communities.,http://dblp.uni-trier.de/db/conf/webi/wss2004.html#LiuYFYY04
,,,,,Web-based Support Systems (WSS): A Report of the WIC Canada Research Centre,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.119.2457
,,,,,\"Probabilistic rough sets: Approximations, decision-makings, and applications.\",http://dblp.uni-trier.de/db/journals/ijar/ijar49.html#YaoYZ08
,,,,,Feature Selection with Adjustable Criteria.,http://dblp.uni-trier.de/db/conf/rsfdgrc/rsfdgrc2005-1.html#YaoZ05
,,,,,Time Dependent Directional Profit Model for Financial Time Series Forecasting.,http://dblp.uni-trier.de/db/conf/ijcnn/ijcnn2000-5.html#YaoT00
,,,,,Level-wise Construction of Decision Trees for Classification.,http://dblp.uni-trier.de/db/journals/ijseke/ijseke16.html#ZhaoYY06
,,,,,Rough Set Model Selection for Practical Decision Making.,http://dblp.uni-trier.de/db/conf/fskd/fskd2007-3.html#HerbertY07
,,,,,On Web-based Support Systems.,http://dblp.uni-trier.de/db/conf/iicai/iicai2005.html#Yao05
,,,,,Ecommerce Adoption of Insurance Companies in New Zealand.,http://dblp.uni-trier.de/db/journals/jecr/jecr5.html#Yao04
,,,,,A case study on using neural networks to perform technical forecasting of forex.,http://dblp.uni-trier.de/db/journals/ijon/ijon34.html#YaoT00
,,,,,Forecasting and Analysis of Marketing Data Using Neural Networks.,http://dblp.uni-trier.de/db/journals/jise/jise14.html#YaoTPT98
,,,,,Information granulation and granular relationships.,http://dblp.uni-trier.de/db/conf/grc/grc2005.html#Yao05a
,,,,,A Ten-year Review of Granular Computing.,http://dblp.uni-trier.de/db/conf/grc/grc2007.html#Yao07a
,,,,,An Enhanced Support Vector Machine Model for Intrusion Detection.,http://dblp.uni-trier.de/db/conf/rskt/rskt2006.html#YaoZF06
,,,,,Web-Based Support Systems with Rough Set Analysis.,http://dblp.uni-trier.de/db/conf/rseisp/rseisp2007.html#YaoH07
,,,,,Towards a Better Forecasting Model for Economic Indices.,http://dblp.uni-trier.de/db/conf/jcis/jcis2002.html#Yao02a
,,,,,A Comparative Study on Marketing Mix Models for Digital Products.,http://dblp.uni-trier.de/db/conf/wine/wine2005.html#WangWY05
,,,,,Knowledge Based Descriptive Neural Networks.,http://dblp.uni-trier.de/db/conf/rsfdgrc/rsfdgrc2003.html#Yao03a
,,,,,Web-Based Information Retrieval Support Systems: Building Research Tools for Scientists in the New Information Age.,http://dblp.uni-trier.de/db/conf/webi/webi2003.html#YaoY03
,,,,,A Granular Computing Approach to Machine Learning,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.13.7170
,,,,,Web-based Support Systems,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.11.2143
,,,,,Induction of Classification Rules by Granular Computing.,http://dblp.uni-trier.de/db/conf/rsctc/rsctc2002.html#YaoY02
,,,,,A Rough Sets Based Approach to Feature Selection,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.1.4295
,,,,,Induction of Classification Rules,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.13.500
,,,,,Foundations of Classification.,http://dblp.uni-trier.de/db/series/sci/sci9.html#YaoYZ06
,,,,,XML Algebras for Data Mining,http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.1.5361
,,,,,A Granular Computing Approach to Machine Learning.,http://dblp.uni-trier.de/db/conf/fskd/fskd2002.html#YaoY02
info:lib:am:2009-01-04:christian_zimmermann,Person,Christian Zimmermann,http://ideas.repec.org/zimm,http://authorclaim.org/profile/pzi1/,Assurance Chomage Et Societes,http://citeseer.ist.psu.edu/434820.html
,,,,,Credit Crunch in a Model of Financial Intermediation and Occupational Choice,http://citeseer.ist.psu.edu/425207.html
,,,,,The Economics of open bibliographic data provision,http://eprints.rclis.org/3117/
&&linkage
&version,&linkageType
0.1,rdf
&attributeList,&mapTo
prefLabel,http://www.w3.org/2000/01/rdf-schema#label
homepage,http://xmlns.com/foaf/0.1/homepage
prefURL,http://purl.org/ontology/bibo/uri
&typeList,&mapTo
Person,http://xmlns.com/foaf/0.1/Person
";

$parser = new CommonParser($csvFile);

if(!$parser->getErrors())
{
  echo "<h2>CSV Records</h2>";

  var_dump($parser->getCsvRecords());

  echo "<h2>Common Records</h2>";

  var_dump($parser->getCommonRecords());

  echo "<h2>Linkage Schema</h2>";

  var_dump($parser->getLinkageSchema());
}
else
{
  echo "<h2>Parsing Errors</h2>";

  foreach($parser->getErrors() as $key => $error)
  {
    echo $key . ". " . $error . "<br />";
  }
}
?>