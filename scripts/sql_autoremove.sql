delete from check.log where (select count from (select count(Id) as count from check.log)as c) > 90 order by Id limit 10
