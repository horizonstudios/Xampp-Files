using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class EnemyMove : MonoBehaviour {

    public float xMoveDir;
    public float enemySpeed;
    public float collisionDetection;
    
	// Update is called once per frame
	void Update () {
        RaycastHit2D ray = Physics2D.Raycast(transform.position, new Vector2(xMoveDir, 0));
        gameObject.GetComponent<Rigidbody2D>().velocity = new Vector2(xMoveDir, 0) * enemySpeed;
        if (ray.distance < collisionDetection)
        {
            if (ray.collider.tag.Equals("Player"))
            {
                GameObject.FindGameObjectWithTag("EndZone").GetComponent<PlayerHealth>().RecieveDamage(1);
            }
            Flip();
        }
	}

    private void Flip()
    {
        if (xMoveDir > 0)
        {
            xMoveDir = -1;
        }
        else
        {
            xMoveDir = 1;
        }
    }
}
