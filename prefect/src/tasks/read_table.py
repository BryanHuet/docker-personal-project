from config.database import connect_to_database
from prefect import task
from sqlalchemy import text


@task
def readMyTable():
    database = "eruditio"
    table = "mytable"
    engine = connect_to_database(database)

    sql_query = f"""SELECT * FROM {table};"""

    with engine.connect() as conn:
        result = conn.execute(text(sql_query)).fetchall()
    return result
