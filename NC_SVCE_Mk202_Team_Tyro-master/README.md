# SIH-PROJECT
### Problem statement<br>
MGNREGA program houses a large volume of data on various parameters across the country (excess of 50 TBs) consisting of year on year data starting primarily FY 2005-06 till date. As part of reporting and monitoring activities, the program has a large and complex reporting framework consisting of reports count in excess of 600 reports. It is required that a solution be devised which is able to streamline the reporting process (generation of reports) and is able to highlight/eliminate duplicate reports, properly categorize reports, highlight high/medium/low importance reports etc. An on the fly dynamic facility for generation of reports by selection required filters/parameters may also be conceptualized, developed and implemented with minimal gaps and errors. Sample Data Required: Yes (Reports, available in public domain)
<br>

### Objective

Python Data Pre-processing using Spark Dataframe

1. Loading Data (Loading CSV file into HDFS, HDFS to Spark)
2. Exploring Data 
  2.1 Understaning Dataframe Schema
  2.2 Obtaining summary statistics
  2.3 GroupBy and Aggregation
  2.4 Visualizing Data
3. Cleaning Data
  3.1 Filtering Data
4. Streamlining the reporting data
5. Eliminating the duplicate report / categorize report 
6. Highlighting the High/Medium/Low importance reports
7. Generation of reports by selection required filters/parameters.

### Architecture Diagram 
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/architectureImage/architecture_.png" width="600px" height="400px">

### Output

### To Start all the Daemons services
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/screenShots/start_hadoop_yarn.jpeg"  width="600px" height="400px"><br>
#### PySpark
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/screenShots/pyspark_started.jpeg"  width="600px" height="400px">

#### Map Reduce
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/output/Screenshot%20from%202020-08-01%2011-00-34.png" width="600px" height="400px">

#### Map Reduce Task
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/output/Screenshot%20from%202020-08-01%2010-58-45.png" width="600px" height="400px">

### To Streamline the Data
<code>spark-submit spark_stream_main.py localhost 9999</code>

<code> spark_stream_main.py </code> - mapreducing code of live data from locathost port 9999

### Hadoop Web UI
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/screenShots/dashboard_of_hadoop.png" width="600px" height="400px">

### Moving data from LocalFile to HDFS.
we can access it from any where. <br>
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/screenShots/datamoved_into_HDFS.png"  width="600px" height="400px">

## Dealing with 50TB data using functions
<code>process_data.py</code> <br>
1. Remove duplicate records.
2. Removing duplicate based on col
3. Sort by max job card holders state
4. Sort by min job card holders state
5. Sort by max SC people's hold job cards
6. Sort by min SC people's hold job cards
7. Sort by state names

#### Create a horizontal bar plot
<code>
df_pandas.plot(kind='barh', x='State Name', y='Job card Holders', colormap='winter_r')
plt.show()
</code>

After completion of process, we can store data into HDFS. It's secure and we can access from any where.while retriving the data, we can use the above filters agian.
<br>
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/screenShots/after_processing_the_data_stored_into_HDFS.png" width="600px" height="400px">
<br>
## predictive analytics
We are having huge amount of data. Based on this we can predict, what will be happen. Like this year <B> 20,000 Job cards issued. So, what will be value of next year!</B>.
Here, we did predictive analytics by using <code>fulldata.csv</code>.<br>
<code> prediction analysis.ipynb </code> - This file has code of predictive analytics. After that, we can plot graph to visuailize the output.
<a href="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/prediction%20analysis.ipynb"> Click Here!</a> to see the predictive analytics report and graph.<br>
<img src="https://github.com/M-Vigneshwaran-git/NC_SVCE_Mk202_Team_Tyro/blob/master/screenShots/prediction_report.png" width="600px" height="400px" >
