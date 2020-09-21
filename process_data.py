from pyspark.sql import Row
from pyspark.sql import SparkSession
from pyspark.sql.types import StructField, StructType, StringType, IntegerType
from pyspark.sql import Window
import pyspark.sql.functions as f
from pyspark import SparkContext
from pyspark.streaming import StreamingContext


sc=SparkSession.builder.appName("SIH2020").getOrCreate()

print("--------------loading from HDFS---------")
df= sc.read.csv("hdfs:///demo/day/std.csv")

print("--remove duplicate----")
df.drop_duplicates(subset=['_c1']).count()


print("#load data")
df= sc.read.csv("hdfs:///demo/day/std.csv")

print("removing duplicate at col 1")
df.drop_duplicates(subset=['_c1']).count()


print("#sort by max job card holders state")
df.sort(desc('_c2')).show()

print("sort by min job card holders state")
df.sort('_c2').show()

print("#sort by max SC people's hold job cards")
df.sort(desc('_c3')).show()

print("sort by min SC people's hold job cards")
df.sort('_c3').show()


print("#sort by max ST people's hold job cards")
df.sort(desc('_c4')).show()

print("sort by min ST people's hold job cards")
df.sort('_c4').show()

print("sort by satenames")
df=df.sort('_c1').show()

#store into HDFS
print("store into HDFS")
df.write.format('csv').option('header',True).mode('overwrite').option('sep','|').save('hdfs:///demo/day/processed_data.csv')
