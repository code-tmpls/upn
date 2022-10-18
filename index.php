<?php
$PROJECT_IMG_PATH = 'http://localhost/np/locumme_data/images/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/html.js"></script>
<style>
h3 { color:#d0254e;padding-bottom:15px;border-bottom:1px solid #d0254e; }
.bg-box { background-color:#c1e2ff;border-color:#024279; }
.subheading { margin-top:15px; margin-bottom:15px; }
a { color: #024279; }
pre { background:none;border:0px; }
body { font-size:12px;padding:15px; }
.hide-block { display:none; }
.output-bg { background-color:#fefefe; }
.mtop5p { margin-top:5px; }
.mtop15p { margin-top:15px; }
.mtop25p { margin-top:25px; }
.mbot5p { margin-bottom:5px; }
img { width:300px;height:100%;padding:5px; }
.pad5p { padding:5px; }
.mbot15p { margin-bottom:15px; }
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background-color:#d0254e; }
.dropdown-menu>li>a { padding: 5px 20px; }
</style>
<script type="text/javascript">
let technologies = [{id:"",
					 title:"INDIAN POLITY",
					 subject:[{ id:"indian-constitution",
								title:"Indian Constitution",
								syllabus:[{id:"01-background",title:"Background"},
										{id:"02-sources",title:"Sources"},
										{id:"03-framing",title:"Framing"},
										{id:"04-philosophy",title:"Philosophy"},
										{id:"05-nature-and-features",title:"Nature and Features"},
										{id:"06-preamble",title:"Preamble"},
										{id:"07-at-a-glance",title:"At a Glance"}] },
										{ id:"indian-judiciary",
								 title:"Indian Judiciary",
								 syllabus:[{id:"01-judiciary",title:"Judiciary"},
								 {id:"02-rule-of-law",title:"Rule of Law"},
								 {id:"03-judicial-review",title:"Judicial Review"},
								 {id:"04-judiciary-vs-review",title:"Judiciary VS Legislature"},
								 {id:"05-panchayat-and-municipalities",title:"Panchayat and Municipalities"},
								 {id:"06-electoral-system-and-its-reforms",title:"Electoral System and its Reforms"},
								 {id:"07-central-and-state-public-service-commission",title:"Central and State- Public service Commission"},
								 {id:"08-emergency-provisions",title:"Emergency Provisions"},
								 {id:"09-official-language",title:"Official Language"},
								 {id:"10-important-commissions",title:"Important Commissions"},
								 {id:"11-tribunals",title:"Tribunals"},
								 {id:"12-councils",title:"Councils"},
								 {id:"13-constitutional-amendment",title:"Constitutional Amendment"},
								 {id:"14-miscellaneous-topics",title:"Miscellaneous Topics"}] },
							   
								
								 { id:"indian-history",
								 title:"Indian History",
								 syllabus:[{id:"01-indian-pre-history",title:"Indian Pre-History"},
								 {id:"02-indus-valley-civilization",title:"Indus Valley Civilization"},
								 {id:"03-the-vedic-civilization",title:"The Vedic Civilization"},
								 {id:"04-buddhism-and-jainism",title:"Buddhism and Jainism"},
								 {id:"05-the-mahajanapadas",title:"The Mahajanapadas"},
								 {id:"06-the-mauryans",title:"The Mauryans"},
								 {id:"07-post-mauryan-kingdoms",title:"Post Mauryan Kingdoms"},
								 {id:"08-early-history-of-south-india",title:"Early History of South India"},
								 {id:"09-the-gupta-period",title:"The Gupta Period"},
								 {id:"10-later-guptas",title:"Later Guptas (7-12 Century A.D)"},
								 {id:"11-post-gupta-period-in-south-india",title:"Post Gupta Period in South India"},
								 {id:"12-art-and-architecture-in-ancient-india",title:"Art and Architecture in Ancient India"}]},
								 
								 
								 { id:"medieval-history",
								 title:"Medieval History",
								 syllabus:[{id:"01-india-between-750-1200",title:"India Between 750-1200 AD"},
								 {id:"02-establishment-and-expansion",title:"Establishment and Expansion of Delhi Sultanate"},
								 {id:"03-emergence-of-regional-states",title:"Emergence of Regional States in India"},
								 {id:"04-religious-movements",title:"Religious Movements"},
								 {id:"05-mughal-dynasty",title:"Mughal Dynasty"},
								 {id:"06-administration-under-mughals",title:"Administration Under Mughals"},
								 {id:"07-later-mughals",title:"Later Mughals"},
								 {id:"08-the-maratha-state",title:"The Maratha State"},
								 {id:"09-european-arrival",title:"European Arrival"} ]},
								
								 { id:"modern-india",
								 title:"Modern India",
								 syllabus:[{id:"01-european-penetration-and-british-conquest",title:"European Penetration and British Conquest"},
								 {id:"02-major-battles",title:"Major Battles"},
								 {id:"03-british-policies",title:"British Policies"},
								 {id:"04-social-and-cultural-awakening",title:"Social and Cultural Awakening"},
								 {id:"05-resistance-to-british-rule",title:"Resistance to British Rule"},
								 {id:"06-the-great-revolt",title:"The Great Revolt of 1857"},
								 {id:"07-indian-nationalism",title:"Indian Nationalism"},
								 {id:"08-indian-national-congress",title:"Indian National Congress"},
								 {id:"09-nationalist-movement",title:"Nationalist Movement"},
								 {id:"10-struggle-for-swaraj-I",title:"Struggle for Swaraj-I, 1919-1927 "},
								 {id:"11-struggle-for-swaraj-II",title:"Struggle for Swaraj-II, 1927-1947"},
								 {id:"12-constitutional-developments",title:"Constitutional Developments"},
								 {id:"13-british-education-policy",title:"British Education Policy"},
								 {id:"14-indian-press-under-british",title:"Indian Press Under British Rule"},
								 {id:"15-governor-generals",title:"Governor-General of India"},
								 {id:"16-indian-princely-states",title:"Indian Princely States"},
								 {id:"17-chronology-of-events",title:"Chronology of Events"}  ]},
								

								 { id:"world-history-01",
								 title:"World History-01",
								 syllabus:[{id:"01-renaissance",title:"Renaissance"},
								 {id:"02-american-revolution",title:"American Revolution"},
								 {id:"03-french-revolution",title:"French Revolution"},
								 {id:"04-industrialisation",title:"Industrialisation"},
								 {id:"05-nationalism-and-british-democratic-politics",title:"Nationalism and British Democratic Politics"},
								 {id:"06-unification-of-italy-and-germany",title:"Unification of Italy and Germany"},
								 {id:"07-imperialism-and-colonialism",title:"Imperialsim and Colonialism"},
								 {id:"08-world-war-i",title:"World War-I"},
								 {id:"09-russian-revolution",title:"Russian Revolution"},
								 {id:"10-world-between-two-world-wars",title:"World Between Two World Wars"},
								 {id:"11-world-war-ii",title:"World War-II"}]},
								 

								 { id:"world-history-02",
								 title:"World History-02",
								 syllabus:[{id:"01-political-philosophies",title:"Political Philosophies"},
								 {id:"02-the-league-of-nations",title:"The Legue of Nations"},
								 {id:"03-united-nations",title:"United Nations"},
								 {id:"04-cold-war",title:"Cold War"},
								 {id:"05-nam",title:"NAM"},
								 {id:"06-redrawal-of-national-boundaries-and-decolonization",title:"Redrawal of National Boundaries and Decolonization"},
								 {id:"07-disintegration-of-ussr",title:"Disintegration of USSR"} ]},


								 { id:"geography-01",
								 title:"Geography-01",
								 syllabus:[{id:"01-our-universe",title:"Our Universe"},
								 {id:"02-interior-infrastructure-of-earth",title:"Interior Infrastructure of Earth"},
								 {id:"03-mineral-and-rocks",title:"Mineral & Rocks"},
								 {id:"04-forces-effecting-the-earth-movements",title:"Forces Effecting The Earth Movements"},
								 {id:"05-weathering-and-erosion",title:"Weathering & Erosion"},
								 {id:"06-geogmorphological-landforms",title:"Geogmorphological Landforms"},
								 {id:"07-volcanoes-earthquakes",title:"Volcanoes Earthquakes"},
								 {id:"08-erosional-and-depositional-landforms",title:"Erosional & Depositional Landforms"},
								 {id:"09-drainage-system-and-patterns",title:"Drainage System & Patterns"},
								 {id:"10-atmosphere",title:"Atmosphere"},
								 {id:"11-climatic-classification",title:"Climatic Classification"},
								 {id:"12-hydrosphere",title:"Hydrosphere"},
								 {id:"13-soil",title:"Soil"},
								 {id:"14-natural-vegetation",title:"Natural Vegitation"},
								 {id:"15-population",title:"Population"},
								 {id:"16-human-settlement",title:"Human Settlement"},
								 {id:"17-agriculture",title:"Agriculture"},
								 {id:"18-fisheries",title:"Fisheries"},
								 {id:"19-minerals",title:"Minerals"},
								 {id:"20-industries",title:"Industries"},
								 {id:"21-energy-resources",title:"Energy Resources"},
								 {id:"22-transport",title:"Transport"} ]},
								
															
								{ id:"js",
								 title:"Javascript",
								 syllabus:[{id:"js_01_introduction",title:"Introduction"},
										  {id:"js_02_ecmascript",title:"ECMAScript"},
										  {id:"js_03_grammar",title:"Grammar and types"},
										  {id:"js_04_control",title:"Control flow and Error handling"},
										  {id:"js_05_loops",title:"Loops and iteration"},
										  {id:"js_06_functions",title:"Functions"},
										  {id:"js_07_expressions",title:"Expressions and operators"},
										  {id:"js_08_numbers",title:"Numbers and dates"},
										  {id:"js_09_txtFormat",title:"Text formatting"},
										  {id:"js_10_regularExp",title:"Regular expressions"},
										  {id:"js_11_indexCollections",title:"Indexed collections"},
										  {id:"js_12_keyCollections",title:"Keyed collections"},
										  {id:"js_13_workingObjects",title:"Working with objects"},
										  {id:"js_14_detailObjectModel",title:"Details of the object model"},
										  {id:"js_15_usingPromises",title:"Using promises"},
										  {id:"js_16_iteratorsGenerators",title:"Iterators and generators"},
										  {id:"js_17_metaProgramming",title:"Meta programming"},
										  {id:"js_18_javascriptModules",title:"JavaScript modules"},
										  {id:"js_19_designPatterns",title:"Design Patterns"},
										  {id:"js_20_reflections",title:"Reflections"},
										  {id:"js_21_all",title:"All"}]},
								{ id:"typescript",
								  title:"TypeScript",
								  syllabus:[{id:"typescript_01_introduction",title:"Introduction"}] },
								{ id:"nodejs",
								 title:"Node JS",
								 syllabus:[{id:"nodejs_01_introduction",title:"Introduction"}] },
								{ id:"react",
								  title:"React JS",
								  syllabus:[{id:"react_01_introduction",title:"Introduction"},
											{id:"react_02_dom",title:"React DOM"},
											{id:"react_03_programming",title:"React Basics"},
											{id:"react_04_state",title:"React State"},
											{id:"react_05_props",title:"React Props"},
											{id:"react_06_events",title:"React Events"},
											{id:"react_07_classcomponents",title:"Class Components"},
											{id:"react_08_funccomponents",title:"Functional Components"},
											{id:"react_09_databwcomponents",title:"Data b/w Components"},
											{id:"react_10_libraries",title:"React Support Libraries"},
											{id:"react_11_redux",title:"React Redux"},
											{id:"react_12_reactprod",title:"React in Production"}]},
								{ id:"frontendUnitTesting",
								  title:"Testing Technologies",
								  syllabus:[{id:"frontendUnitTesting_01_basics",title:"Basics"},
											{id:"frontendUnitTesting_02_mochaJs",title:"Mocha JS"},
											{id:"frontendUnitTesting_03_jasmine",title:"Jasmine"},
											{id:"frontendUnitTesting_04_selenium",title:"Selenium"},
											{id:"frontendUnitTesting_05_protractor",title:"Protractor"},
											{id:"frontendUnitTesting_06_jest",title:"Jest"},]}
								]
					},
					{id:"",
					 title:"BACKEND TECHNOLOGIES",
					 subject:[{ id:"java",
								title:"Java",
								syllabus:[{id:"java_01_basics",title:"Basics"},
										 {id:"java_02_oops",title:"OOPS"},
										 {id:"java_03_nestedInnerClasses",title:"Nested / Inner Classes"},
										 {id:"java_06_strings",title:"Strings & Arrays"},
										 {id:"java_07_controlFlow",title:"Control Flow & Error Handling"},
										 {id:"java_08_exceptionHandling",title:"Exception Handling"},
										 {id:"java_09_collections",title:"Collections"},
										 {id:"java_10_multiThreading",title:"Multi-Threading"},
										 {id:"java_11_garbageCollectors",title:"Garbage Collectors"},
										 {id:"java_12_jdbc",title:"JDBC"},
										 {id:"java_13_rmi",title:"RMI"},
										 {id:"java_14_jspsServlets",title:"JSPs & Servlets"},
										 {id:"java_15_gui",title:"Java GUI"},
										 {id:"java_16_sockets",title:"Socket Programming"}] },
							  { id:"springFramework",
								title:"Spring Framework",
							    syllabus:[{id:"springFramework_00_basics",title:"Spring Basics"},
										  {id:"springFramework_01_core",title:"Spring Core"},
										  {id:"springFramework_02_annotations",title:"Spring Annotations"},
										  {id:"springFramework_03_data",title:"Spring Data"},
										  {id:"springFramework_04_aop",title:"Spring AOP"},
										  {id:"springFramework_05_mvc",title:"Spring MVC"},
										  {id:"springFramework_06_boot",title:"Spring Boot"},
										  {id:"springFramework_07_security",title:"Spring Security"},
										  {id:"springFramework_08_OAuth",title:"Spring OAuth"},
										  {id:"springFramework_09_cloud",title:"Spring Cloud"},
										  
										  {id:"springFramework_07_batch",title:"Spring Batch"},
										  {id:"springFramework_08_microservices",title:"Spring Microservices"}
										 ] },
							  { id:"hibernate",
								title:"Hibernate",
							    syllabus:[{id:"hibernate_01_core",title:"Hibernate Core"}] },
							  { id:"all",
								title:"all",
							    syllabus:[{id:"javabasics_01_core",title:"Java Basics"},
										  {id:"javabasics_02_oops",title:"Java OOPs"},
										  {id:"javabasics_03_inheritance",title:"Java Inheritance"},
										  {id:"javabasics_04_static",title:"Java Static"},
										  {id:"javabasics_05_methodOverloadingOverriding",title:"Method Overloading / Overriding"},
										  {id:"javabasics_06_polymorphism",title:"Java Polymorphism"},
										  {id:"javabasics_07_abstraction",title:"Abstraction"},
										  {id:"javabasics_08_final",title:"Final"},
										  {id:"javabasics_09_packages",title:"Packages"},
										  {id:"javabasics_10_internationalization",title:"Internationalization"},
										  {id:"javabasics_11_serialization",title:"Serialization"},
										  {id:"javabasics_12_reflection",title:"Reflection"},
										  {id:"javabasics_13_garbageCollection",title:"Garbage Collection"},
										  {id:"javabasics_14_innerClasses",title:"Inner Classes"},
										  {id:"javabasics_15_string",title:"String"},
										  {id:"javabasics_16_exceptionHandling",title:"Exception Handling"},
										  {id:"javabasics_17_collections",title:"Collections"},
										  {id:"javabasics_18_multiThreading",title:"Multi-Threading"},
										  {id:"javabasics_19_java8",title:"Java 8"},
										  {id:"javabasics_20_trickyQuestions",title:"Java Tricky Questions"},
										  {id:"javabasics_21_mixedQuestions",title:"Mixed Questions"},
										  {id:"javabasics_22_jsp",title:"JSPs"},
										  {id:"javabasics_23_javaDesignPatterns",title:"Java Design Patterns"},
										  {id:"javabasics_24_spring",title:"Spring Framework"},
										  {id:"javabasics_25_hibernate",title:"Hibernate"},
										  {id:"javabasics_26_maven",title:"Maven"},
										  {id:"javabasics_27_git",title:"Git Repository"},
										  {id:"javabasics_28_aws",title:"AWS"},
										  {id:"javabasics_29_cloudComputing",title:"Cloud Computing"},
										  {id:"javabasics_30_docker",title:"Docker"},
										  {id:"javabasics_31_microservices",title:"Microservices"}
										 ] },
							  { id:"microservices",
								title:"Microservices",
							    syllabus:[{id:"microservices_01_core",title:"Microservices"}] },
							 ]
					},
					{id:"",
					 title:"MESSAGING QUEUES",
					 subject:[{ id:"amqp",
								title:"AMQP",
								syllabus:[{id:"amqp_01_basics",title:"Basics"}] },
							  { id:"kafka",
								title:"Apache Kafka",
							    syllabus:[{id:"kafka_01_basics",title:"Basics"}] }]
					},
					{id:"",
					 title:"WEB SERVER AND WEB BROWSER",
					 subject:[{ id:"httpWeb",
								 title:"HTTP/HTTPS Protocol",
								 syllabus:[{id:"httpWeb_01_httpProtocol",title:"Introduction"},
										   {id:"httpWeb_02_webBrowser",title:"Web Browser"}] },
							  { id:"cors",
								 title:"CORS",
								 syllabus:[{id:"cors_01_introduction",title:"Introduction"}] },
							  { id:"websockets",
								 title:"WebSockets",
								 syllabus:[{id:"websockets_01_introduction",title:"Introduction"}] },
							  { id:"webservers",
								 title:"Web Servers",
								 syllabus:[{id:"webservers_01_apacheTomcat",title:"Apache Tomcat"},
										   {id:"webservers_02_iis",title:"IIS"}] },
							 ]
					},
					{id:"devops",
					 title:"DEVOPS",
					 subject:[{ id:"progLang",
								title:"Programming Language",
								syllabus:[{id:"progLang_01_python",title:"Python"}] },
							  { id:"serverAdmin",
								title:"Server Administration",
								syllabus:[{id:"serverAdmin_01_linux",title:"Linux"},
										  {id:"serverAdmin_02_windows",title:"Windows"}] }]
					},
					{id:"",
					 title:"CLOUD COMPUTING",
					 subject:[]
					},
					{id:"",
					 title:"SQL / NO-SQL DATABASES",
					 subject:[{ id:"dbBasics",
								title:"Basics",
								syllabus:[{id:"dbBasics_01_introduction",title:"Introduction"}] },
							  { id:"mysql",
								title:"MySQL Server",
								syllabus:[{id:"mysql_01_introduction",title:"Introduction"}] },
							  { id:"mssql",
								title:"Microsoft SQL Server",
								syllabus:[{id:"mssql_01_dbmsKnowledge",title:"DBMS knowledge"},
										  {id:"mssql_02_designProgram",title:"Design & Programming"},
										  {id:"mssql_02_indexes",title:"Indexes"},
										  {id:"mssql_03_view",title:"View"},
										  {id:"mssql_04_sqlserverAdministration",title:"SQL Server Administration"},
										  {id:"mssql_05_replication",title:"Replication"},
										  {id:"mssql_06_security",title:"Security"},
										  {id:"mssql_07_transactions",title:"Transactions"},
										  {id:"mssql_08_triggers",title:"Triggers"},
										  {id:"mssql_09_storedProcedures",title:"Stored Procedures"},
										  {id:"mssql_10_cursors",title:"Cursors"},
										  {id:"mssql_11_datatypes",title:"Data Types"},
										  {id:"mssql_12_xmlSql",title:"XML in SQL"},
										  {id:"mssql_13_clustering",title:"Clustering"}] },
							  { id:"oracleDb",
								title:"Oracle DB Server",
								syllabus:[{id:"oracleDb_01_introduction",title:"Introduction"}] },
							 ]
					}
					];
</script>
</head>
<body>

<script type="text/javascript">
</script>  

<div class="container-fluid">
  <div class="row">
	 <div class="col-sm-12 mbot15p">
		<div id="technologyMenu" class="col-sm-3" style="padding-top:3px;">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">WEB SERVER AND WEB BROWSER &nbsp;
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#" onclick="javascript:sel_technology();">FRONTEND TECHNOLOGIES</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">BACKEND TECHNOLOGIES</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">WEB SERVER AND WEB BROWSER</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">DEVOPS</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">CLOUD COMPUTING</a></li>
				</ul>
			</div>
		</div>
		<div id="mainTechMenu" class="col-sm-9"></div>
	 </div>
  </div>
  <div class="row">
    <div id="leftSyllabusMenu" class="col-sm-2"></div><!--/.col-sm-2 -->
    <div class="col-sm-7">
		<div id="qaLeftColumn" class="col-sm-12"></div><!--/.col-sm-6 -->
		<div id="qaRightColumn" class="col-sm-12"></div><!--/.col-sm-6 -->
      <!-- -->
	  <!-- -->
    </div><!--/.col-sm-8 -->
	<div class="col-sm-5">

	</div>
  </div><!--/.row -->
</div><!--/.container-fluid -->

<link rel="stylesheet" href="vendor/highlight/css/androidstudio.css">
<script src="vendor/highlight/js/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
  
</body>
</html>
